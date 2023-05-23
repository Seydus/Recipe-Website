-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`ID`, `Fname`, `Lname`, `Username`, `Email`, `Password`) VALUES
(4, '--', '--', 'admin', '--', '1234'),
(8, 'Rhenz', 'Largo', 'ChippyS', 'rhenzlargo@gmail.com', 'darkforgel2003'),
(10, 'Cedric', 'Rafanan', 'CedRaf', 'craf@gmail.com', '0000'),
(11, 'Steven', 'Tiu', 'ElDorito', 'sTiu@gmail.com', 'abcd'),
(12, '', '', 'Wel', 'weljohn@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(250) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `posted-date` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `ingredients` mediumtext NOT NULL,
  `instruction` mediumtext NOT NULL,
  `tags` varchar(100) NOT NULL,
  `image-path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `author`, `posted-date`, `img`, `description`, `ingredients`, `instruction`, `tags`, `image-path`) VALUES
(18, 'Adobong Manok', 'Rhenz Largo', 'May 23, 2023', '', 'Adobong manok, often called \"chicken adobo,\" is often considered the national dish of the Philippines. Although the origins of its name are with the Spanish colonizers — adobo is the Spanish word for a marinade — Filipinos have been making tart, vinegar-based dishes since time immemorial. The vinegar marinade makes a dish that stores very well in the Filipino heat. Endless varieties of adobo exist and each region has its own specialty. Besides chicken and pork, adobo can be made with fish, squid, green bean and even eggplant.', '<ul><li>2 lbs. Chicken cut into serving pieces</li><li>1 piece Knorr Chicken Cube</li><li>1 head garlic crushed</li><li>1 piece onion chopped</li><li>6 pieces dried bay leaves</li><li>1 tablespoon whole peppercorn</li><li>½ cup soy sauce</li><li>5 tablespoons white vinegar</li><li>1 ½ tablespoons dark brown sugar</li><li>2 cups water</li><li>3 tablespoons cooking oil</li><li>Salt to taste</li></ul>', '<ol><li>Heat oil in a cooking pot. Saute garlic and onion until the garlic turns light brown and the onion softens.</li><li>Add chicken pieces. Cook until the chicken turns light brown.</li><li>Pour water, soy sauce, and vinegar. Let boil.</li><li>Add Knorr Chicken Cube, whole peppercorn, and dried bay leaves. Stir. Cover the pot and cook in medium heat for 15 minutes.</li><li>Turn the chicken pieces over. Cover and continue to cook for another 15 minutes.</li><li>Add dark brown sugar and season with salt.</li><li>Transfer to a serving bowl. Serve. Share and enjoy!</li></ol>', 'Filipino', '_Pictures/ChickenAdobo.jpg'),
(19, 'Fish Piccata', 'Cedric Rafanan', 'May 23, 2023', '', 'What makes something a piccata? Piccata, though, is an Italian word meaning larded. It seems to be a translation of the French word pique (sharp, as in piquant). When used in a reference to a way of preparing food (particularly meat or fish) it means sliced and sauteed in a sauce containing lemon, butter, and spices', '<ul><li>1 pound trout fillet, or other thin white fish fillet such as sole, halibut, or grouper</li><li>Kosher salt and black pepper</li><li>1 teaspoon dried oregano</li><li>1 teaspoon paprika</li><li>¾ teaspoon garlic powder</li><li>¼ cup flour for dredging, (use whole wheat flour, all-purpose flour, or gluten free flour of your choice)</li><li>⅓ cup extra virgin olive oil</li><li>3 tablespoons unsalted butter or ghee divided</li><li>2 lemons for the juice</li><li>½ cup white wine or chicken broth</li><li>4 tablespoons capers rinsed or drained</li><li>Fresh chopped parsley for garnish</li></ul>', '<ol><li>Season the fish on both sides with salt and pepper. Mix the oregano, paprika, and garlic powder and season the flesh side of the fish.</li><li>To dredge, coat the fish on both sides with the flour.</li><li>In a large cast iron skillet, heat the olive oil and 2 tablespoons of unsalted butter over medium-high heat. Carefully add the fish and cook for 2 to 3 minutes on each side (a total of 4 to 6 minutes), or until the fish is firm and flaky (being careful not to overcook the fish). Transfer the fish to a tray lined with paper towel to drain excess oil.</li><li>To the same pan, add 1 more tablespoon of unsalted. Lower the heat, and add the lemon juice, white wine, and capers. Cook briefly over medium heat.</li><li>Return the fish to the pan and spoon the sauce over the fish.</li><li>Garnish with parsley and red pepper flakes, if using. Serve immediately!</li></ol>', 'American', '_Pictures/FishPicatta.jpg'),
(20, 'Spaghetti', 'Steven Myles Tiu', 'May 23, 2023', '', 'We know, spaghetti and meatballs is a classic for a reason, but sometimes you want to upgrade your usual weeknight dinner. Whether you\'re preparing for a fancy date night or a dinner party night amongst friends, we\'ve got all the ways you can liven up your spaghetti game. When there are so many classic Italian pasta dishes, it can be hard to choose. Especially when that means you could have pasta puttanesca, carbonara, and or spaghetti Bolognese. Whatever you choose, don\'t skimp on the Parmesan cheese. Maybe you\'re craving the more cheesy side of the pasta spectrum, and we 100% support that.', '<ul><li>1 Tbsp olive oil</li><li>1 medium onion, chopped</li><li>3 garlic cloves, minced</li><li>1 jalapeno pepper , seeded and diced</li><li>1 tsp ground cumin</li><li>1 tsp chilli powder</li><li>1 lb chicken breasts, (2 medium)</li><li>20 oz can crushed tomatoes</li><li>32 oz chicken broth</li><li>14 oz can black beans, drained and rinsed</li><li>14 oz can corn, drained and rinsed</li></ul>', '<ol><li>Preheat a pan with 1/4 cup oil over medium-high heat. Cut tortillas into thin strips and fry them in batches in the hot oil until crisp.</li><li>Preheat a pot with oil over medium-high heat. Add chopped onion, garlic and chopped jalapeño and sauté until veggies soften.</li><li>PRemove chicken from the pot and shred it using 2 forks. Add shredded chicken back to the soup and simmer another 5 minutes then add lime juice.</li><li>Serve the soup with some tortilla strips, pieces of avocado, fresh cilantro and lime wedges.</li></ol>', 'Italian', '_Pictures/spaghett.jpg'),
(21, 'Buffalo Wings', 'Jackie Black', 'May 23, 2023', '', 'Buffalo wings, that ever-popular dish consisting of deep-fried chicken wings, slathered in spicy sauce and served with blue cheese dressing and raw celery and carrots, are one of those few lucky foods that are famous enough to boast their very own creation myth. Heres how to make them!', '<ul><li>½ cup all-purpose flour</li><li>¼ teaspoon ground paprika</li><li>¼ teaspoon cayenne pepper</li><li>¼ teaspoon salt</li><li>10 chicken wings</li><li>2 cups vegetable oil for frying, or as needed</li><li>¼ cup butter</li><li>¼ cup hot sauce</li><li>1 pinch ground black pepper</li><li>1 pinch garlic powder</li></ul>', '<ol><li>Whisk together flour, paprika, cayenne pepper, and salt in a large bowl.</li><li>Place chicken wings in the bowl with flour mixture and toss until evenly coated. Transfer wings to a 9x13-inch glass baking dish and arrange in a single layer. Cover and refrigerate for 1 to 1 1/2 hours.</li><li>Add about 1 inch oil to a deep, heavy skillet; heat to 375 degrees F (190 degrees C). (The oil should be just enough to cover wings entirely.)</li><li>Meanwhile, combine butter, hot sauce, pepper, and garlic powder in a separate small saucepan over low heat. Cook and stir until butter is melted and mixture is thoroughly blended. Remove from the heat and reserve for serving.</li><li>Fry coated wings in the hot oil for 10 to 15 minutes, or until they begin to crisp and turn brown. Maintain the oil temperature while cooking. Remove cooked wings from hot oil and let drain on paper towels or a wire rack.</li><li>Transfer wings to a platter and drizzle hot sauce over top; or mix wings and hot sauce in a bowl until coated.</li></ol>', 'American', '_Pictures/buffalo-wings2.jpg'),
(22, 'Beef Bulgogi', 'Weljohn Catanpatan', 'May 23, 2023', '', 'Bulgogi, sometimes known as Korean BBQ beef, is a dish of thinly sliced grilled steak that has been marinated in a sweet soy, sesame, and garlic sauce. If you want to spice it up, serve the beef in lettuce cups with rice and hot pepper paste (gochujang).', '<ul><li>5 tablespoons soy sauce</li><li>¼ cup chopped green onion</li><li>2 ½ tablespoons white sugar</li><li>2 tablespoons minced garlic</li><li>2 tablespoons sesame seeds</li><li>2 tablespoons sesame oil</li><li>½ teaspoon ground black pepper</li><li>Pinch of salt to taste</li><li>¼ teaspoon ground white pepper</li><li>1 pound flank steak, thinly sliced</li></ul>', '<ol><li>Whisk soy sauce, green onion, sugar, garlic, sesame seeds, sesame oil, and pepper together in a bowl.</li><li>Place flank steak slices in a shallow dish. Pour marinade over top. Cover and refrigerate for at least 1 hour or overnight.</li><li>Preheat an outdoor grill for high heat, and lightly oil the grate.</li><li>Quickly grill flank steak slices on the preheated grill until slightly charred and cooked through, 1 to 2 minutes per side.</li><li>Serve hot over rice and enjoy!</li></ol>', 'Korean', '_Pictures/bulgogi.jpg'),
(23, 'Murgh Kari (Indian Chicken Curry)', 'Steve Kerr', 'May 23, 2023', '', 'Enjoy the lavishly delicious taste of chicken curry at home with this easy-to-follow recipe. Bold spices like ginger, cumin, and curry powder add rich layers of flavor to succulent chicken coated in a creamy tomato-based sauce. Fill your kitchen with the delightful fragrance of a creamy, spicy, and filling curry that the whole family will love.', '<ul><li>2 pounds skinless, boneless chicken breast halves</li><li>2 teaspoons salt</li><li>½ cup cooking oil</li><li>1 ½ cups chopped onion</li><li>1 tablespoon minced garlic</li><li>1 ½ teaspoons minced fresh ginger root</li><li>1 tablespoon curry powder</li><li>1 teaspoon ground cumin</li><li>1 teaspoon ground turmeric</li><li>1 tablespoon water</li><li>1 (15 ounce) can crushed tomatoes</li><li>1 cup plain yogurt</li><li>1 tablespoon chopped fresh cilantro</li></ul>', '<ol><li>Sprinkle the chicken breasts with 2 teaspoons salt.</li><li>Heat oil in a large skillet over high heat; partially cook the chicken in the hot oil in batches until completely browned on all sides. Transfer browned chicken breasts to a plate and set aside.</li><li>Add onion, garlic, and ginger to the oil remaining in the skillet. Cook and stir until onion turns soft and translucent, 5 to 8 minutes. Stir curry powder, cumin, turmeric, coriander, cayenne, and 1 tablespoon of water into the onion mixture; heat for 1 minute</li><li>Add tomatoes, yogurt, 1 tablespoon chopped cilantro, and 1 teaspoon salt to the mixture; stir to combine.</li><li>Return chicken breast to the skillet along with any juices on the plate. Pour in 1/2 cup water and bring to a boil, turning the chicken to coat with the sauce. Sprinkle garam masala and 1 tablespoon cilantro over the chicken.</li><li>Cover the skillet and simmer until chicken breasts are no longer pink in the center and the juices run clear, about 20 minutes. Drizzle with lemon juice</li></ol>', 'Indian', '_Pictures/ChickenCurry.jpg'),
(24, 'Vietnamese Fresh Spring Rolls', 'Ava Anderson', 'May 23, 2023', '', 'These Vietnamese spring rolls are a refreshing change from the usual fried variety and have become a family favorite.', '<ul><li>2 ounces rice vermicelli</li><li>8 rice wrappers (8.5 inch diameter)</li><li>8 large cooked shrimp - peeled, deveined and cut in half</li><li>2 leaves lettuce, chopped</li><li>3 tablespoons chopped fresh mint leaves</li><li>3 tablespoons chopped fresh cilantro</li><li>1 ⅓ tablespoons chopped fresh Thai basil</li></ul>', '<ol><li>Cook pasta uncovered, stirring occasionally, until the pasta is tender yet firm to the bite, 3 to 5 minutes.</li><li>Fill a large bowl with warm water. Dip one wrapper into the hot water for 1 second to soften. Lay wrapper flat; place 2 shrimp halves in a row across the center, add some vermicelli, lettuce, mint, cilantro, and basil, leaving about 2 inches uncovered on each side.</li><li>Fold uncovered sides inward, then tightly roll the wrapper, beginning at the end with lettuce. Repeat with remaining ingredients.</li></ol>', 'Vietnamese', '_Pictures/SpringRoll.jpg'),
(25, 'Kafta Kebab', 'Ava Anderson', 'May 23, 2023', '', 'These kebabs are hearty, delicious and go with a variety of options. You can make a shawarma with them or serve alongside Lebanese rice. They go so well with Fattoush or a simple garlic sauce.', '<ul><li>500 g mince beef</li><li>3 tablespoon parsley chopped</li><li>2 tablespoon mint chopped</li><li>1 small onion chopped</li><li>1-2 green chilies sliced</li><li>4 cloves garlic minced</li><li>1 tablespoon fresh ginger</li><li>½ teaspoon nutmeg powder</li><li>½ teaspoon garam masala</li><li>1 slice sandwich bread</li><li>1 teaspoon salt and pepper to taste</li><li>1 ½ teaspoon cumin powder</li><li>1½ teaspoon garam masala</li><li>2 green onions, finely chopped</li><li>1 egg whisked</li></ul>', '<ol><li>Break the slice of bread in a small bowl and add 2-3 tablespoon milk to it. Crush with a fork.</li><li>Then add all the ingredients to the mince beef along with the bread.</li><li>Grind everything in a food processor or chopper to combine well.</li><li>Moisten your hands with water and make flat, oblong kebabs</li><li>On a grill pan or outdoor grill, cook these for around 8-10 mins in total. Flip sides in between.</li><li>Remove on a plate and serve with garlic sauce or yogurt dressing.</li></ol>', 'Arabic', '_Pictures/kebab.jpg'),
(26, 'Salmon Kushiyaki', 'Henry Jenkins', 'May 23, 2023', '', 'This rendition of kushiyaki — the catch-all term for the popular Japanese technique of grilling skewered foods — is a play on a surf and turf, combining salmon with earthy shiitake mushrooms, for a dose of umami. Here the fish is first marinated in a mirin, sake and miso mixture; the same mixture is also brushed on the skewers during cooking for a burnished glaze.', '<ul><li>1/4 cup mirin</li><li>1/4 cup sake</li><li>1/4 cup packed light brown sugar</li><li>1/4 cup light miso</li><li>1 1/2 pounds center-cut, skin-on salmon, trimmed and cut into 1-inch cubes</li><li>6 shiitake mushrooms, stemmed and quartered</li><li>Vegetable oil, for the grill grates</li><li>Kosher salt</li><li>Furikake or shichimi togarashi, for serving</li></ul>', '<ol><li>Soak four 10-inch bamboo paddle skewers in water for 30 minutes.</li><li>Combine the mirin and sake in a small saucepan and bring to a boil over medium-high heat. Add the brown sugar and cook 1-2 minutes.</li><li>Add the miso and whisk until dissolved, 1 to 2 minutes. Let cool, then remove 1/4 cup and set aside for brushing. Pour the remaining marinade over the salmon cubes in a baking dish, tossing to coat.</li><li>Refrigerate the salmon and reserved marinade for at least 6 hours and preferably overnight. Lightly coat the hot grates with vegetable oil.</li><li>Remove the salmon from the marinade and blot dry with a paper towel. Thread each skewer with 5 to 6 pieces each of salmon and shiitake.</li><li>Place the skewers on the grill and lightly sprinkle each with salt. Grill for 1 minute on each side (so they cook evenly).</li></ol>', 'Japanese', '_Pictures/SalmonKushiyaki.jpg'),
(27, 'Yang Chow Fried Rice', 'Noah Johnson', 'May 23, 2023', '', 'Yangzhou fried rice is enjoying super high popularity across the country. One of the reasons why it is so famous is because of the picky requirements of the raw ingredients. It is made with rice that is stir-fried with vegetables and meat and typically includes ingredients such as ham, shrimp, peas, carrots, and eggs.', '<ul><li>6 cups leftover white rice</li><li>2 large eggs, beaten</li><li>2 tablespoons of vegetable oil, butter, or lard can enhance the flavors of fried rice greatly. So you can try to change the oil type you use for fried rice.</li><li>¼ cup diced Chinese ham (or you can use char siu or sausage )</li><li>8-10 shrimp, deveined (optional)</li><li>½ cup green peas, both frozen peas or fresh ones</li><li>½ cup diced carrot, you can use frozen carrots or fresh ones</li><li>Pinch of salt to taste</li><li>¼ teaspoon ground white pepper</li><li>1 tablespoon light soy sauce, you can skip this but it adds a faint unami flavor to the fried rice. But it will also increase the moisture of the fried rice.</li><li>2 green onions, finely chopped</li><li>Pinch of msg to taste</li></ul>', '<ol><li>Slightly separate the grains of rice by slightly pressing the rice with a rice scoop.</li><li>Heat up 1 tablespoon of cooking oil in a wok or a nonstick skillet or wok. Fry shrimp and ham dice until slightly seared. Transfer out.</li><li>Add rice in, and use a turner to separate the rice.</li><li>When the rice grain is slightly warm and hot. Add the remaining 1 tablespoon of cooking oil and pour in the beaten egg and the fried rice. Give a quick stir so the egg and rice can be mixed well quickly.</li><li>Add green beans, carrots, ham, and shrimp, light soy sauce, and sprinkle a pinch of salt and white pepper. Give everything a big stir-fry and mix well.</li><li>Then add green onion and fry for another 30 seconds.</li></ol>', 'Chinese', '_Pictures/YangChow.jpg'),
(28, 'Parmesan Risotto', 'Emma Thompson', 'May 23, 2023', '', 'A classic risotto is a rich, creamy dish with nearly a porridge-like consistency, yet each grain of rice retains a distinct bite. In Italian risotto, the rice is parched as in the pilaf method, but the liquid is added and absorbed gradually while the grain is stirred almost constantly.', '<ul><li>8 cups chicken broth</li><li>1/2 cup finely chopped onion</li><li>1/4 cup olive oil</li><li>3 cups arborio rice</li><li>2 garlic cloves, minced</li><li>1 cup dry white wine or water</li><li>1/2 cup shredded Parmesan cheese</li><li>1/4 teaspoon salt</li><li>1/4 teaspoon pepper</li><li>3 tablespoons minced fresh parsley</li></ul>', '<ol><li>In a large saucepan, heat broth and keep warm. In a Dutch oven, saute onion in oil until tender.</li><li>Add rice and garlic; cook and stir for 2-3 minutes. Reduce heat; stir in wine. Cook and stir until all of the liquid is absorbed.</li><li>Add heated broth, 1/2 cup at a time, stirring constantly and allowing the liquid to absorb between additions. Cook just until risotto is creamy and rice is almost tender, about 20 minutes</li><li>Add the remaining ingredients; cook and stir until heated through. Serve immediately.</li></ol>', 'Italian', '_Pictures/Risotto.jpg'),
(29, 'Chicken Tortilla', 'Harper Robinson', 'May 23, 2023', '', 'Chicken Tortilla is a popular Tex-Mex dish that combines succulent chicken, warm tortillas, and a medley of spices and toppings. It\'s a versatile and satisfying meal that can be enjoyed for lunch or dinner. The dish typically consists of shredded or diced chicken cooked with onions, peppers, and spices, all wrapped in a tortilla and served with toppings like cheese, salsa, guacamole, and sour cream. The combination of tender chicken, zesty flavors, and crispy tortillas creates a mouthwatering treat that will leave you craving for more.', '<ul><li>2 boneless, skinless chicken breasts</li><li>1 tablespoon olive oil</li><li>1 onion, diced</li><li>1 bell pepper, diced</li><li>2 cloves garlic, minced</li><li>1 teaspoon chili powder</li><li>1/2 teaspoon cumin</li><li>1/2 teaspoon paprika</li><li>Salt and pepper to taste</li><li>4-6 flour tortillas</li><li>Toppings: shredded cheese, salsa, guacamole, sour cream, chopped cilantro (optional)</li></ul>', '<ol><li>Heat the olive oil in a large skillet over medium heat. Add the diced onions and bell peppers, and sauté until they become soft and translucent.</li><li>Meanwhile, season the chicken breasts with salt, pepper, chili powder, cumin, and paprika.</li><li>Push the sautéed vegetables to one side of the skillet and add the seasoned chicken breasts. Cook for about 6-8 minutes per side until they are cooked through and no longer pink in the center.</li><li>Remove the chicken from the skillet and let it rest for a few minutes. Once cooled slightly, shred the chicken using two forks or dice it into bite-sized pieces.</li><li>Return the shredded/diced chicken to the skillet with the sautéed vegetables and mix them together. Add minced garlic and cook for an additional 1-2 minutes to allow the flavors to meld.</li><li>Warm the flour tortillas in a separate skillet or in the oven until they become pliable.</li><li>Place a portion of the chicken and vegetable mixture onto a tortilla and fold it over to form a taco or roll it up to make a burrito.</li><li>Serve the chicken tortillas with your choice of toppings, such as shredded cheese, salsa, guacamole, sour cream, and chopped cilantro.</li><li>Enjoy your homemade chicken tortilla while it\'s warm and flavorful!</li></ol>', 'Mexican', '_Pictures/ChickenTortillaSoup.jpg'),
(38, 'Chicken Tinola', 'Wel', 'May 23, 2023', '', 'Chicken Tinola is a popular Filipino soup dish known for its comforting flavors and healthy ingredients. It is typically made with chicken, ginger, garlic, onion, and green papaya or chayote squash.', '<ul><li>1 whole chicken, cut into serving pieces</li><li>1 tablespoon cooking oil</li><li>3 cloves garlic, minced</li><li>1 medium-sized onion, sliced</li><li>2 thumbsized ginger, sliced into strips</li><li>2 cups green papaya or chayote squash, peeled and cut into wedges</li><li>4 cups water</li><li>2 tablespoons fish sauce (patis)</li><li>Salt and pepper to taste</li><li>2 cups malunggay leaves or spinach (optional)</li></ul>', '<ol><li>Heat the cooking oil in a large pot over medium heat. Add the minced garlic and sauté until golden brown.</li><li>Add the sliced onions and ginger to the pot and cook until the onions become translucent and the ginger releases its aroma.</li><li>Place the chicken pieces in the pot and cook until they turn slightly brown on all sides.</li><li>Pour in the water and bring it to a boil. Skim off any impurities that rise to the surface.</li><li>Add the fish sauce (patis) and season with salt and pepper according to your taste.</li><li>Reduce the heat to low, cover the pot, and let the soup simmer for about 30 minutes or until the chicken is tender.</li><li>Add the green papaya or chayote wedges to the pot and cook for another 5 minutes or until they are slightly tender.</li><li>If using malunggay leaves or spinach, add them to the pot and cook for an additional 2 minutes.</li><li>Taste the soup and adjust the seasoning if needed.</li><li>Serve hot and enjoy your delicious Chicken Tinola!</li></ol>', 'Filipino', '_Pictures/chicken-tinola.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
