import {NgModule} from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import {FormsModule} from '@angular/forms';

import {AppRoutingModule} from './app-routing.module';

import {AppComponent} from './app.component';
import {DashboardComponent} from './dashboard/dashboard.component';


@NgModule({
    imports: [
        BrowserModule,
        FormsModule,
        AppRoutingModule
    ],
    declarations: [
        AppComponent,
        DashboardComponent
    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule { }
