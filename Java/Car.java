public class Car { //Clase
    Integer id;
    String license;
    Account driver;
    Integer passegenger;

    public Car(String license, Account driver){ //Metodo constructor
        this.license = license;
        this.driver = driver;
    }

    void printDatacar(){ //Metodo
        System.out.println("Card licence: " + license + " " + "Car Driver: " + driver);
    }

}
