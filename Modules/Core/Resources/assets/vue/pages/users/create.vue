<template>
    <div class="fade-in">
        <b-form @submit="onSubmit">
            <div class="row">
                <div class="col-md-8">
                    <b-card header-tag="header" footer-tag="footer">
                        <template #header>
                            <strong>User info</strong>
                        </template>
                        <b-form-group label="Email" label-for="email" :invalid-feedback="invalidEmail" :state="email">
                            <b-form-input id="email" v-model="form.email" :state="email" type="email" trim></b-form-input>
                        </b-form-group>
                        <b-form-group label="User name" label-for="userName" :invalid-feedback="invalidFeedback" :state="state">
                            <b-form-input id="userName" v-model="form.userName" :state="state" trim></b-form-input>
                        </b-form-group>
                        <b-form-group label="Password" label-for="password" :invalid-feedback="invalidPassword" :state="password">
                            <b-form-input id="password" v-model="form.password" :state="password" type="password" trim></b-form-input>
                        </b-form-group>
                        <b-form-group label="Confirm password" label-for="confirm-password"  :invalid-feedback="invalidConfirmPassword" :state="confirmPassword">
                            <b-form-input id="confirm-password" v-model="form.confirmPassword" :state="confirmPassword" type="password" trim></b-form-input>
                        </b-form-group>
                        <b-form-group label="Full name" label-for="full-name">
                            <b-form-input id="full-name" v-model="form.fullName"  trim></b-form-input>
                        </b-form-group>
                        <template #footer>
                            <b-button type="submit" variant="success" size="sm">Create</b-button>
                            <router-link class="btn btn-sm btn-secondary" :to="{ name: 'users.list' }">
                                Cancel
                            </router-link>
                        </template>
                    </b-card>
                </div>
                <div class="col-md">
                    <b-card header-tag="header" footer-tag="footer">
                        <template #header>
                            <strong>Avatar</strong>
                        </template>
                        <b-img :src="form.avatar"  v-on:error="avatarError" thumbnail fluid alt="Fluid image"></b-img>
                        <template #footer>
                            <b-form-file id="avatar" accept=".jpg, .png, .gif, .svg" center @change="previewImage" size="sm"></b-form-file>
                        </template>
                    </b-card>
                </div>
            </div>
        </b-form>
    </div>
</template>

<script>
import {BCard, BFormGroup, BImg, BButton, BFormFile, BFormInput, BForm} from 'bootstrap-vue'

export default {
    name: "create",
    components: {BCard, BFormGroup, BImg, BButton, BFormInput, BFormFile, BForm},
    computed: {
        state() {
            if (this.form.userName.length > 0) {
                return this.form.userName.length >= 6
            } else {
                return null;
            }
        },
        invalidFeedback() {
            if (this.form.userName.length > 0) {
                return 'Enter at least 6 characters.'
            }
        },
        email(){
            if (this.form.email.length > 0) {
                return this.validate.email.test(this.form.email);
            } else {
                return null;
            }
        },
        invalidEmail() {
            if (! this.email ) {
                return 'Wrong format.'
            }
        },
        password(){
            if (this.form.password.length > 0) {
                return this.validate.password.test(this.form.password);
            } else {
                return null;
            }
        },
        invalidPassword() {
            if (! this.password ) {
                return 'Input Password [6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter]';
            }
        },
        confirmPassword(){
            if (this.form.confirmPassword.length > 0) {
                return this.form.confirmPassword == this.form.password;
            } else {
                return null;
            }
        },
        invalidConfirmPassword() {
            if (!this.confirmPassword) {
                return 'Confirm password failure';
            }
        }
    },

    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            alert(JSON.stringify(this.form))
        },
        previewImage: function (event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = (e) => {
                    this.form.avatar = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        },
        avatarError : function (event){
            event.target.src = "/imgs/no-user-image-icon.jpg";
        }
    },
    data() {
        return {
            validate :{
                email : /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
                password : /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/,
            },
            form :{
                userName: '',
                password: '',
                confirmPassword: '',
                avatar: '',
                fullName: '',
                email: ''
            }
        }
    }
}
</script>

<style scoped>

</style>
