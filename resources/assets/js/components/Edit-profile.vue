<script>
    export default {
        name: 'edit_profile',
        data() {
            return {
                user: {
                    username: '',
                    email: '',
                    birth: null
                },
                message: '',
                message_class: '',
                button_class: ''
            }
        },
        mounted() {
            this.getData();
        },
        methods: {
            getData() {
                var _self = this;
                axios.get('/profile').then(function (response) {
                    _self.user = response.data;
                }).catch(function (error) {
                    _self.message_class = 'message__error';
                    _self.button_class = 'btn__error';
                    _self.message = "An error occured! Refresh the page";
                });
            },
            saveData() {
                var _self = this;
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        axios.post('/profile/update/'+_self.user.id, _self.user)
                        .then(function (response) {
                            _self.message_class = 'message__success';
                            _self.button_class = 'btn__success';
                            _self.message = "Success";
                        })
                        .catch(function (error) {
                            _self.message_class = 'message__error';
                            _self.button_class = 'btn__negative';
                            _self.message = "An error occured! Refresh the page";
                        });
                        _self.setNormalButton();
                    } else {
                    }
                });
            },
            setNormalButton() {
                var _self = this;
                setTimeout(function(){
                    _self.message = '';
                    _self.message_class = '';
                    _self.button_class = '';
                }, 2500);
            }
        }
    }
</script>
