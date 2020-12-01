<template>
    <div class="fade-in">
        <div class="row">
            <div class="col-md-9">
                <b-card header-tag="header" footer-tag="footer">
                    <template #header>
                        <strong>User info</strong>
                    </template>
                        <b-form-group label="User name"  label-for="userName" :invalid-feedback="invalidFeedback" :state="state" >
                            <b-form-input id="userName" v-model="userName" :state="state" trim></b-form-input>
                        </b-form-group>

                        <b-form-group label="Password"  label-for="password">
                            <b-form-input id="password" v-model="password" type="password" trim></b-form-input>
                        </b-form-group>

                        <b-form-group label="Confirm password"  label-for="confirm-password">
                            <b-form-input id="confirm-password" v-model="confirmPassword" type="password" trim></b-form-input>
                        </b-form-group>
                    <template #footer>
                        <b-button variant="success" size="sm">Create</b-button>
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
                    <b-img :src="avatar" thumbnail  fluid alt="Fluid image"></b-img>
                    <template #footer>
                        <b-form-file id="avatar" accept=".jpg, .png, .gif, .svg" ref="fileAvatar" @change="previewImage" size="sm"></b-form-file>
                    </template>
                </b-card>
            </div>
        </div>
    </div>
</template>

<script>
import { BCard ,BFormGroup , BImg ,BButton ,BFormFile ,BFormInput} from 'bootstrap-vue'
export default {
    name: "create",
    components:{ BCard,BFormGroup,BImg, BButton, BFormInput, BFormFile },
    computed: {
        state() {
            if (this.userName.length > 0) {
                return this.userName.length >= 6
            }else{
                return null;
            }
        },
        invalidFeedback() {
            if (this.userName.length > 0) {
                return 'Enter at least 6 characters.'
            }
        }
    },
    methods: {
        previewImage: function(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = (e) => {
                    this.avatar = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    },
    data() {
        return {
            userName: '',
            password: '',
            confirmPassword: '',
            avatar: '',
        }
    }
}
</script>

<style scoped>

</style>
