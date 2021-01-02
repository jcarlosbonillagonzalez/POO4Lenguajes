class Main {

    public static void main(String[] args) {
        System.out.println("Hola care bola");
        UberX uberX = new UberX("AMQ123", new Account("Andres", "dw123"), "Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDatacar();

        UberVan uberVan = new UberVan("EOEO22", new Account("Andres", "231"));
        uberVan.setPassenger(6);
        uberVan.printDatacar();
    }
}