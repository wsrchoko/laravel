export interface Account {
    [key: string]: any;

    id : Number;
    username : String;
    name : String;
    imageUrl : String;
    street : String;
    city : String;
    state : String;
    zip : String;
    country : Country;
    email : String;
    phone : String;
    role : String;
    collapsedMenu : Boolean;
}

export interface Country {
    code : Number;
    name : String;
}
