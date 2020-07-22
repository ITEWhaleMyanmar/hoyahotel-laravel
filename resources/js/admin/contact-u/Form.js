import AppForm from '../app-components/Form/AppForm';

Vue.component('contact-u-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                email:  '' ,
                phone:  '' ,
                address:  '' ,
                
            }
        }
    }

});