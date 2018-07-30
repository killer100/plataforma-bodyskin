require('./bootstrap');
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {MuiThemeProvider, createMuiTheme} from '@material-ui/core/styles';
import red from '@material-ui/core/colors/red';
import grey from '@material-ui/core/colors/grey';
import MuiPickersUtilsProvider from 'material-ui-pickers/utils/MuiPickersUtilsProvider';
import MomentUtils from 'material-ui-pickers/utils/moment-utils';
import moment from 'moment';
import 'moment/locale/es';
import {Provider} from 'react-redux';
import configureStore from './configure-store';
import App from './app';
const store = configureStore();


const theme = createMuiTheme({
    // palette: {
    //     primary: { main: red['A700'] }, // Purple and green play nicely together.
    //     secondary: { main: grey[50] }, // This is just green.A700 as hex.
    // },
    // typography: {
    //     // In Japanese the characters are usually larger.
    //     fontSize: 13,
    // },
});

ReactDOM.render(
    <Provider store={store}>
        <MuiThemeProvider theme={theme}>
            <MuiPickersUtilsProvider utils={MomentUtils} moment={moment} locale="es">
                <App />
            </MuiPickersUtilsProvider>
        </MuiThemeProvider>
    </Provider>,
    document.getElementById('app')
);