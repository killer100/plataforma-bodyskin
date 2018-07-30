import React from 'react';
import {connect} from 'react-redux';
import {fecthContacts} from '../../actions/contacts';


class ContactosContainer extends React.Component {

    constructor(props) {
        super(props);
    }

    componentDidMount() {
        this.props.dispatch(fecthContacts());
    }

    render() {

        const {pagination, loading} = this.props;

        return <div>
            {loading && "cargando..."}
            {pagination.items.map((item, index) => {
                return <div key={index}>{item.nombres} {item.apellidos}</div>;
            })}
        </div>;
    }
}

const mapStateToProps = (state) => {
    return {
        pagination: state.contacts.pagination,
        loading: state.contacts.loading
    }
};

export default connect(mapStateToProps)(ContactosContainer);