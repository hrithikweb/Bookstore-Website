CREATE DATABASE BookStoreCreator;

CREATE TABLE BookInventory(
bookid INT AUTO_INCREMENT PRIMARY KEY,
author VARCHAR(50),
title VARCHAR(500),
price VARCHAR(10),
image VARCHAR(50),
description VARCHAR(700),
Quantity INT
);


INSERT INTO `bookinventory` (`bookid`, `author`, `title`, `price`, `image`, `description`, `Quantity`) VALUES
(1, 'Chetan Bhagat', 'Half Girlfriend', 'cad$ 500', 'halfgirlfriend.jpg', 'Half Girlfriend is an Indian English coming of age, young adult romance novel by Indian author Chetan Bhagat.The novel, set in rural Bihar, New Delhi, Patna, and New York, is the story of a Bihari boy in quest of winning over the girl he loves.This is Bhagat\'s sixth novel which was released on 1 October 2014 by Rupa Publications. The novel has also been published in Hindi and Gujarati.', 200),
(2, 'Leo Tolstoy', 'War and Peace', 'cad$ 50', 'war.jpg', 'The novel chronicles the French invasion of Russia and the impact of the Napoleonic era on Tsarist society through the stories of five Russian aristocratic families. Portions of an earlier version, titled The Year 1805,[4] were serialized in The Russian Messenger from 1865 to 1867 before the novel was published in its entirety in 1869.', 70),
(3, 'J. R. R. Tolkien', 'The Lord of the Rings', 'cad$ 70', 'lord.jpg', 'The title refers to the story\'s main antagonist, the Dark Lord Sauron, who in an earlier age created the One Ring to rule the other Rings of Power given to Men, Dwarves, and Elves, in his campaign to conquer all of Middle-earth. From homely beginnings in the Shire, a hobbit land reminiscent of the English countryside, the story ranges across Middle-earth, following the quest to destroy the One Ring mainly through the eyes of the hobbits Frodo, Sam, Merry and Pippin.', 80),
(4, 'F. Scott Fitzgerald', 'The Great Gatsby', 'cad$ 110', 'great.jpg', 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with mysterious millionaire Jay Gatsby and Gatsby\'s obsession to reunite with his former lover, Daisy Buchanan.', 40),
(5, 'Margaret Mitchell', 'Gone with the Wind', 'cad$ 55', 'gone.jpg', 'Gone with the Wind is a novel by American writer Margaret Mitchell, first published in 1936. The story is set in Clayton County and Atlanta, both in Georgia, during the American Civil War and Reconstruction Era. It depicts the struggles of young Scarlett O\'Hara, the spoiled daughter of a well-to-do plantation owner, who must use every means at her disposal to claw her way out of poverty following Sherman\'s destructive \"March to the Sea\".', 60);