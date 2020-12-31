class Main {
    public static void main(String [] args) {
        System.out.println("Hola care bola");
        Car car = new Car("AMQ123", new Account("Andres", "dw123"));
        car.passegenger = 4;
        car.printDatacar();

        Payment payment = new Payment (2);
        payment.printDatacar();

        Payment payment1 = new Payment (3);
        payment1.printDatacar();

        Account account = new Account ("JuanChito", "12313131");
        account.printDatacar();

        Account account1 = new Account ("Osquitar", "23155555");
        account1.printDatacar();



    }
}