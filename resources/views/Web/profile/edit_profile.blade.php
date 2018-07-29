<div class="panel  mt-10">
    <div class="panel__header panel__header--primary">
        Edit profile
    </div>
    <div class="panel__body">
        <edit_profile inline-template>
            <div>
                <div v-if="message" class="message" v-bind:class="[ message_class ]">
                    @{{ message }}
                </div>
                <form class="form" v-on:submit.prevent="saveData">
                    <div class="form__group">
                        <input class="form__input" type="text" name="username" id="username" v-validate="'required'" v-model="user.username" autocomplete="off" />
                        <label class="form__label" for="username">Username</label>
                        <div v-if="errors.has('username')" class="message message__error">@{{ errors.first('username') }}</div>
                    </div>
                    <div class="form__group">
                        <input class="form__input" type="email" name="email" id="email" v-validate="'required|email'" v-model="user.email" autocomplete="off"/>
                        <label class="form__label " for="email">E-mail address</label>
                        <div v-if="errors.has('email')" class="message message__error">@{{ errors.first('email') }}</div>
                    </div>
                    <div class="form__group">
                        <input class="form__input" type="text" name="birth" id="birth" v-model="user.birth"  v-validate="'required|date_format:YYYY-MM-DD'" autocomplete="off"/>
                        <label class="form__label">Date of birth</label>
                        <div v-if="errors.has('birth')" class="message message__error">@{{ errors.first('birth') }}</div>
                    </div>

                    <button type="submit" class="btn" v-bind:class="[ button_class ]">Save</button>
                </form>
            </div>
        </edit_profile>
    </div>
</div>