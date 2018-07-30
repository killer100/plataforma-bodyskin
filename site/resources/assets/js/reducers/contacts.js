import {REQUEST_CONTACTS, RECEIVE_CONTACTS} from '../actions/contacts';

const contacts = (state = {loading: false, pagination: {page: 1, pageSize: 5, total: 0, items: []}}, action) => {
    switch (action.type) {
        case REQUEST_CONTACTS:
            return {
                ...state,
                loading: true
            };
        case RECEIVE_CONTACTS:
            return {
                pagination: action.pagination,
                loading: false
            };
        default:
            return state;
    }
};

export default contacts;