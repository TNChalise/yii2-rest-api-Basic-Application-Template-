/**
 * Created by tnchalise on 17/12/14.
 */


// Ways of creating Objects
var object = new Object();
var object = object.create(object.prototype);
var object = {};




/**************************
 Abstract Factory Method;
**************************/
function Employee(name) {
    this.name = name;

    this.say = function () {
        console.log('I am '+ this.name);
    };
}

function EmployeeFactory() {

    this.create = function(name) {
        return new Employee(name);
    };
}

// Usage:
var employee = new Employee('TN Chalise');//
persons.say(); // Alerts "I am TN Chalise"

var employeeFromFactory = new EmployeeFactory();
employeeFromFactory.create('Employee From factory').say();// Alerts "Employee From Factory"







