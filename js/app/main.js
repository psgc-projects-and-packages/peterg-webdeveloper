
const getPlanets = async () => {

    const url = 'https://swapi.co/api/planets/1';
    return await axios.get(url)
    /*
    axios.get(url)
        .then(function (response) {
            //console.log(response);
            return response;
        })
        .catch(function (error) {
            console.log(error);
            // always executed
        });
        */
}

// https://next.leadconduit.com/flows/5e4d6fc19d696a154eb194fa/sources/5e4d6ebc0522c3d92624257d/docs
const getLeadConduitRequest = (data) => {
    //const lcURL = 'https://app.leadconduit.com/flows/5e4d6fc19d696a154eb194fa/sources/5e4d707cd8510ab5ecf8a137/submit'
    const lcURL = 'https://app.leadconduit.com/flows/5e4d6fc19d696a154eb194fa/sources/5e4d6ebc0522c3d92624257d/submit'
    const payload = {
        "first_name": "Peter",
        "last_name": "Test",
        "phone_1": "2065551234",
        "email": "p@p.com",
        "address_1": "123 Madeup Street",
        "address_2": "Unit C",
        "city": "Las Vegas",
        "state": "NV",
        "postal_code": "89169"
    };

    return {
        headers: { 
            //'content-type': 'application/x-www-form-urlencoded' 
            'content-type': 'application/json'
        },
        data: payload,
        url: lcURL,
        method: 'POST'
    };
}

const postLead = async () => {
    const url = getLeadConduitRequest({});
    return await axios.get(url)
}
