import axios from 'axios';
import { Account } from '../models/Account';

export class AccountHttp {

    async index() : Promise<Account> {
        let res = await axios.get('/api/account');
        return {
            id : res.data.id,
            username : res.data.username,
            name : res.data.name,
            street : res.data.street,
            city : res.data.city,
            state : res.data.state, 
            zip : res.data.zip,
            country : {
                code : res.data.country.code,
                name : res.data.country.name
            },
            email : res.data.email, 
            phone : res.data.phone,
            imageUrl : res.data.imageUrl,
            role : res.data.role,
            collapsedMenu : res.data.collapsedMenu
        }
    }
    
    async update(property: string, value: any, accountId: Number) {
        let data = new FormData();
        data.append( 'property', property );
        data.append( 'value', value );
        data.append( '_method', 'patch' );
        const config = {
            headers: { 
                'content-type': 'multipart/form-data' 
            }
        }
        let res = await axios.post(`/api/account/${accountId}`, data, config);
        return res.data;
    }
    
}
