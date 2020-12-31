class Account {
    Integer id;
    String name;
    String document;
    String email;
    String password;

    public Account(String name, String document){
      this.name = name;
      this.document = document;
    }

    void printDatacar(){
      System.out.println("Name: "+" "+ name + " "+ "Document: " +" "+ document); 
    }
}

