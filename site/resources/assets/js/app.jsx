import React, {Component} from 'react';
import ContactosContainer from './components/contactos/contactos-container';
import Header from './components/_layout/header';

class App extends Component {
    render() {
        return (
            <div>
                <Header/>
                <ContactosContainer />
            </div>
        );
    }
}

export default App;