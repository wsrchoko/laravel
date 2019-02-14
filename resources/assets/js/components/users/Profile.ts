import Vue from 'vue';
import { Component } from 'vue-property-decorator';
import { AccountHttp } from '../../services/AccountHttp';
import { Account } from '../../models/Account';

declare var $: any;

@Component({
    data() {
        return {
            account : {
                country : {}
            },
            properties : [
                'username', 
                'name',
                'street',
                'city',
                'countryId',
                'phone',
                'imageUrl'
            ]
        }
    }
})
export default class ProfileUser extends Vue {
    account!: Account;
    properties!: String[];

    accountHttp: AccountHttp = new AccountHttp();

    beforeMount() {
        this.loadAccount();
    }
    
    async loadAccount() {
        this.account = await this.accountHttp.index();
    }
    
    async updateProperties(property: string, value: any) {
        if( this.properties.indexOf(property) >= 0 ) {
            let propertiesValidate = [
                'username', 
                'name',
                'street',
                'city',
                'phone' 
            ];
            if( propertiesValidate.indexOf(property) >= 0 ) {
                value = value.trim();
                if( !value ) {
                    Vue.set(this.account, `isRequired${this.capitalizeString(property)}`, true);
                    return false;
                }
            }
            let valueUpdated = await this.accountHttp.update(property, value, this.account.id);
            this.account[property] = valueUpdated;
            Vue.set(this.account, `isRequired${this.capitalizeString(property)}`, false);
        }
    }
    
    changeImage() {
        $(this.$refs.inputFileImage).trigger('click');
    }
    
    saveImage(image: any) {
        let value = image.target.files[0];
        this.updateProperties( 'imageUrl', value );
    }
    
    mounted() { }

    private capitalizeString(value: String) {
        return value.replace( /^[a-z]{1}/igm, (x) => {
            return x.toUpperCase();
        });
    }
    
}