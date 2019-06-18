// The Profile
SC.ENVIRONMENT.PROFILE = {
    "firstname": "",
    "paymentterms": null,
    "phoneinfo": null,
    "middlename": "",
    "vatregistration": null,
    "creditholdoverride": null,
    "lastname": "",
    "internalid": "0",
    "addressbook": null,
    "campaignsubscriptions": [{
        "internalid": 2,
        "subscribed": false,
        "name": "Billing Communication",
        "description": null
    }, {
        "internalid": 1,
        "subscribed": false,
        "name": "Marketing",
        "description": null
    }, {
        "internalid": 4,
        "subscribed": false,
        "name": "Newsletters",
        "description": null
    }, {
        "internalid": 5,
        "subscribed": false,
        "name": "Product Updates",
        "description": null
    }, {
        "internalid": 3,
        "subscribed": false,
        "name": "Surveys",
        "description": null
    }],
    "isperson": null,
    "balance": null,
    "creditcards": null,
    "companyname": null,
    "name": null,
    "emailsubscribe": "F",
    "creditlimit": null,
    "email": "",
    "subsidiary": "1",
    "language": "en",
    "currency": {
        "internalid": "1",
        "symbol": "$",
        "currencyname": "USA",
        "code": "USD",
        "precision": 2
    },
    "isLoggedIn": "F",
    "isGuest": "F",
    "priceLevel": "5",
    "customFields": {
        "custentity_generate_statement": "https://system.na1.netsuite.com/app/accounting/print/printstatements.nl?trantype=&printtype=statement&method=print&title=Statements&whence=",
        "custentity_ps_customer_category": "",
        "custentity_cust_has_terms": ""
    }
};

SC.SESSION = {
    currency: {
        "internalid": "1",
        "symbol": "$",
        "code": "USD",
        "name": "USA",
        "currencyname": "USA",
        "isdefault": "T",
        "symbolplacement": 1
    },
    language: {
        "name": "English (U.S.)",
        "isdefault": "T",
        "locale": "en_US",
        "languagename": "English (U.S.)"
    },
    priceLevel: "5",
    touchpoints: {
        "logout": "https://checkout.troyleedesigns.com/TroyLeeDesigns/TLD/logOut.ssp?is=checkout&logoff=T&ckabandon=oXLKhpVHAmWZa4I1&vid=RozxJpVHAmeZa-dx&chrole=17&ck=oXLKhpVHAmWZa4I1&cktime=149442&promocode=&promocodeaction=overwrite&gc=clear",
        "customercenter": "https://checkout.troyleedesigns.com/TroyLeeDesigns/TLD/my_account.ssp?is=checkout&vid=RozxJpVHAmeZa-dx&chrole=17&ck=oXLKhpVHAmWZa4I1&cktime=149442&promocode=&promocodeaction=overwrite&gc=clear",
        "serversync": "https://checkout.troyleedesigns.com/app/site/backend/syncidentity.nl?c=735741&n=3&vid=RozxJpVHAmeZa-dx&chrole=17&ck=oXLKhpVHAmWZa4I1&cktime=149442",
        "viewcart": "/TroyLeeDesigns/TLD/goToCart.ssp?is=checkout",
        "login": "https://checkout.troyleedesigns.com/TroyLeeDesigns/TLD/checkout.ssp?is=login&login=T&vid=RozxJpVHAmeZa-dx&chrole=17&ck=oXLKhpVHAmWZa4I1&cktime=149442&promocode=&promocodeaction=overwrite&gc=clear",
        "welcome": "/s.nl",
        "checkout": "https://checkout.troyleedesigns.com/TroyLeeDesigns/TLD/checkout.ssp?is=checkout&vid=RozxJpVHAmeZa-dx&chrole=17&ck=oXLKhpVHAmWZa4I1&cktime=149442&promocode=&promocodeaction=overwrite&gc=clear",
        "continueshopping": "/",
        "home": "http://www.troyleedesigns.com",
        "register": "https://checkout.troyleedesigns.com/TroyLeeDesigns/TLD/checkout.ssp?is=register&login=T&reset=T&newcust=T&vid=RozxJpVHAmeZa-dx&chrole=17&ck=oXLKhpVHAmWZa4I1&cktime=149442&promocode=&promocodeaction=overwrite&gc=clear"
    }
};

SC.ENVIRONMENT.permissions = {
    "transactions": {
        "tranCashSale": 0,
        "tranCustCred": 0,
        "tranCustDep": 0,
        "tranCustPymt": 0,
        "tranStatement": 0,
        "tranCustInvc": 0,
        "tranItemShip": 0,
        "tranSalesOrd": 0,
        "tranEstimate": 0,
        "tranRtnAuth": 0,
        "tranDepAppl": 0,
        "tranSalesOrdFulfill": 0,
        "tranFind": 0
    },
    "lists": {
        "regtAcctRec": 0,
        "regtNonPosting": 0,
        "listCase": 0,
        "listContact": 0,
        "listCustJob": 0,
        "listCompany": 0,
        "listIssue": 0,
        "listCustProfile": 0,
        "listExport": 0,
        "listFind": 0,
        "listCrmMessage": 0
    }
};

// Cases configuration

SC.ENVIRONMENT.CASES_CONFIG = {
    "default_values": {
        "status_start": {
            "id": "1",
            "name": "Not Started"
        },
        "status_close": {
            "id": "5",
            "name": "Closed"
        },
        "origin": {
            "id": "-5",
            "name": "Web"
        }
    }
};



// The Product Lists and its configuration.
SC.ENVIRONMENT.PRODUCTLISTS_CONFIG = {
    "additionEnabled": true,
    "loginRequired": true,
    "list_templates": [{
        "templateid": "1",
        "name": "My list",
        "description": "An example predefined list",
        "scope": {
            "id": "2",
            "name": "private"
        }
    }, {
        "templateid": "2",
        "name": "Saved for Later",
        "description": "This is for the cart saved for later items",
        "scope": {
            "id": "2",
            "name": "private"
        },
        "type": {
            "id": "2",
            "name": "later"
        }
    }]
};


// Ef - Customization to remove publish and add userPublish
SC.ENVIRONMENT.userPublished = {};


if (SC.PROFILE_PROMISE) {
    SC.PROFILE_PROMISE.resolve(SC.ENVIRONMENT.PROFILE);
    SC.PROFILE_REFRESH = true;
}