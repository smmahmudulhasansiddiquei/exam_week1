<?Php 

    class Book{
        private $title;
        private $availableCopies;

        public function __construct($title, $availableCopies)
        {
            $this -> title = $title;
            $this -> availableCopies = $availableCopies;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getAvailable(){
            return $this-> availableCopies;
        }

        public function borrowBook(){
            if($this->availableCopies > 0){
                $this->availableCopies--;
                return true;
            }else{
                return false;
            }
        }

        public function returnBook(){
            $this->availableCopies++;
        }
    }

    // Member class

    class Member{
        private $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function borrowBook($book){
            if($book->borrowBook()){
                // echo $this->name . " borrowed this book " . $book->getTitle() . "\n <br>";
            }else{
                // echo $this->name . " does't borrowed this book " . $book->getTitle(). "\n <br>";
            }
        }

        public function returnBook($book){
            $book->returnBook();
            echo $this->name . "returned this book " . $book->getTitle() . "\n <br>";
        }
    }

    //Usage

    //Create 2 book
    $book1 = new Book('The Great Gatsby', 5);
    $book2 = new Book('To Kill a Mockingbird', 3);

    //Create 2 Members
    $member1 = new Member('John Doe');
    $member2 = new Member('Jane Smith');

    $member1->borrowBook($book1);
    $member2->borrowBook($book2);

    echo "<br><b><u> \n Available Copies of Books: \n</u></b><br>";
    echo "Available Copies of ". " '{$book1->getTitle()}'" . ": " . $book1->getAvailable() . "<br> \n";
    echo "Available Copies of ". " '{$book2->getTitle()}'" . ": " . $book2->getAvailable();

?>