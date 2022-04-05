<?php

 /**
* The base Transaction class that defines a buy and sell feature.
*/
class Transaction{
    
    public void buy(String stock, int quantity, float price){
        // implement buy logic here
    };
    public void sell(String stock, int quantity, float price){
        // implement sell logic here
    }; 
}
/**
* A subclass implementation of the Transaction class that 
* defines Stock-specific buy and sell action logic.
*/
class StockTransaction extends Transaction{
    
    @Override
    public void buy(String stock, int quantity, float price){
        // implement Stock-specific buy logic here
    }
    @Override
    public void sell(String stock, int quantity, float price){
        // implement Stock-specific sell logic here
    }
}

/* In this example, the Transaction class is subclassed by StockTransaction where the base buy() and sell() 
methods are overridden to provide the desired functionality. This approach, while basic and lackluster 
in many regards, conforms to the Liskov Substitution Principle by assuring that substituting a subclass 
instance of StockTransaction for a superclass instance of Transaction will not break core functionality.
 More concretely, the substituted subclass instance will still provide buy and sell functionality that 
 could be called in the same manner. */