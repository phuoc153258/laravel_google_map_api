async function getListPlace() {
    try {
        const response = await axios({
            method: "get",
            url: `/api/places?is_paginate=false`,
            data: {},
        });
        places = response.data.data.data;
    } catch (error) {
        console.log(error);
    }
}
