<edit_profile inline-template>
    <div class="container">
        <div v-if="message" class="message" v-bind:class="[ message_class ]">
            @{{ message }}
        </div>
        <form class="form" v-on:submit.prevent="saveData">
            <div class="form__group">
                <input class="form__input" type="text" name="username" id="username" v-validate="'required'" v-model="user.username" />
                <label class="form__label" for="username">Username <em>*</em></label>
                <div v-if="errors.has('username')" class="message message__error">@{{ errors.first('username') }}</div>
            </div>
            <div class="form__group">
                <input class="form__input" type="email" name="email" id="email" v-validate="'required|email'" v-model="user.email" autocomplete="false"/>
                <label class="form__label " for="email">E-mail address <em>*</em></label>
                <div v-if="errors.has('email')" class="message message__error">@{{ errors.first('email') }}</div>
            </div>
            <div class="form__group">
                <input class="form__input" type="text" name="birth" id="birth" v-validate="'required|date_format:YYYY-MM-DD'" v-model="user.birth" />
                <label class="form__label">Date of birth <em>*</em></label>
                <div v-if="errors.has('email')" class="message message__error">@{{ errors.first('birth') }}</div>
            </div>
            <button type="submit" class="btn" v-bind:class="[ button_class ]">Save</button>
        </form>
    </div>
</edit_profile>