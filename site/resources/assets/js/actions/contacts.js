import axios from 'axios';
export const RECEIVE_CONTACTS = 'RECEIVE_CONTACTS';
export const REQUEST_CONTACTS = 'REQUEST_CONTACTS';


export function receiveContacts(pagination) {
    return {
        type: RECEIVE_CONTACTS,
        pagination
    };
}

export function requestContacts() {
    return {
        type: REQUEST_CONTACTS
    };
}


export function fecthContacts(){
    return dispatch => {
      dispatch(requestContacts());
      return axios.get('/api-test/get-contacts').then(response => {
          dispatch(receiveContacts(response.data.data.pagination));
      });
    };
}