import Vue from 'vue';
import Component from 'vue-class-component';
import { Prop } from 'vue-property-decorator';
import axios from 'axios';
import { Account } from '../../models/Account';

@Component({
    data() {
        return { }
    }
})
export default class Navbar extends Vue {

    @Prop()
    account: Account;

    logoutClick() {
        axios.post('/logout', {}).then(() => {
            window.location.href = '/login';
        });
    }

}