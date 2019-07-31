import {API_ENDPOINT} from "../config/variables";

const getAPIResponse = action => new Promise((resolve, reject) => {
    fetch(API_ENDPOINT + action)
        .catch(reason => reject(reason))
        .then(response => response.json())
        .then(response => resolve(response));
});

export {getAPIResponse};