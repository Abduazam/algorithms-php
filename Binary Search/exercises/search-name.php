<?php

// Array of 128 names
$names = [
    "Aaron", "Abigail", "Adam", "Adrian", "Aidan", "Aiden", "Alan", "Albert", "Alex", "Alexander",
    "Alexandra", "Alexis", "Alice", "Allison", "Amelia", "Amy", "Andrew", "Angel", "Angela", "Anna",
    "Anthony", "Antonio", "Ashley", "Austin", "Ava", "Avery", "Bailey", "Benjamin", "Bianca", "Blake",
    "Bradley", "Brandon", "Brayden", "Brendan", "Brian", "Brianna", "Brody", "Brooke", "Caleb", "Cameron",
    "Caroline", "Carson", "Carter", "Charles", "Charlotte", "Chase", "Chelsea", "Chloe", "Christian", "Christopher",
    "Claire", "Cody", "Cole", "Colin", "Connor", "Cooper", "Courtney", "Crystal", "Daisy", "Daniel",
    "Danielle", "David", "Derek", "Destiny", "Dominic", "Dylan", "Edward", "Eleanor", "Eli", "Elijah",
    "Elizabeth", "Ella", "Ellie", "Emily", "Emma", "Eric", "Erin", "Ethan", "Evan", "Evelyn",
    "Faith", "Gabriel", "Gabriella", "Gavin", "Gianna", "Grace", "Hailey", "Haley", "Hannah", "Hayden",
    "Henry", "Hope", "Hunter", "Ian", "Isaac", "Isabella", "Isabelle", "Jack", "Jackson", "Jacob",
    "Jada", "Jaden", "Jake", "James", "Jasmine", "Jason", "Jayden", "Jeffrey", "Jenna", "Jennifer",
    "Jeremy", "Jesse", "Jessica", "Jesus", "Joel", "John", "Jonathan", "Jordan", "Joseph", "Joshua",
    "Julia", "Julian", "Justin", "Kaitlyn", "Karen", "Katherine", "Katie", "Kayla", "Kaylee", "Keith",
    "Kelly", "Kenneth", "Kevin", "Kimberly", "Kyle", "Landon", "Laura", "Lauren", "Layla", "Leah",
    "Leo", "Leonardo", "Levi", "Liam", "Lillian", "Lily", "Logan", "Lucas", "Lucy", "Luke",
    "Mackenzie", "Madeline", "Madelyn", "Madison", "Makayla", "Mason", "Matthew", "Max", "Megan", "Melanie",
    "Mia", "Michael", "Michelle", "Miguel", "Morgan", "Natalie", "Nathan", "Nicholas", "Nicole", "Noah",
    "Olivia", "Oscar", "Owen", "Paige", "Parker", "Patrick", "Paul", "Peter", "Peyton", "Rachel",
    "Rebecca", "Richard", "Riley", "Robert", "Ryan", "Sabrina", "Samantha", "Samuel", "Sarah", "Savannah",
    "Sean", "Sebastian", "Serenity", "Seth", "Shane", "Shawn", "Shelby", "Sienna", "Sofia", "Sophia",
    "Sophie", "Stella", "Stephanie", "Stephen", "Steven", "Summer", "Sydney", "Tanner", "Taylor", "Thomas",
    "Timothy", "Trinity", "Tyler", "Valeria", "Vanessa", "Veronica", "Victor", "Victoria", "Vincent", "Wesley",
    "William", "Wyatt", "Xavier", "Zachary", "Zoe"
];

function binarySearch($array, $number)
{
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $middle = intval(($low + $high) / 2);
        $guess = $array[$middle];

        if ($guess === $number) {
            return $middle;
        }

        if ($guess > $number) {
            $high = $middle - 1;
        } else {
            $low = $middle + 1;
        }
    }

    return "Not found!";
}

echo binarySearch($names, "Jordan");