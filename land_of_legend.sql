-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 10:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land_of_legend`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `image`, `country_id`) VALUES
(2, 'United Airlines', 'الخطوط الامريكيه', 'dksdksjhdshdhsds\r\nsdsjdshd', 'سيةستيهخستيهخستهخيسهخي\r\nسياسايعسايعس', '1654282688.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `image`) VALUES
(4, 'Adventure', 'المغامرة', 'The nature of the land has for centuries shaped the nature of its inhabitants; and the nature of the land here has inspired hospitable people, varied local cuisine and remarkable experiences. The variety in landscape also inspires locals and guests to go on safaris, watch migratory birds on their seasonal movements, observe endangered species in their natural habitats, search for rare flowers in the valleys and hills, enjoy some horseback riding, or trek around the Kingdom.\r\n\r\n\r\n\r\nIn Jordan you will be able to hike through canyons, and descend stunning waterfalls in the middle of untouched nature, climb cliffs and mountains to reach breathtaking views, bike through the roads of history’s kings and emperors and so much more.', 'طوال قرونٍ من الزمن، لعبت طبيعة الأرض دوراً في تشكيل طبيعة سكّانها، إذ استلهمت بعض الشعوب حسن ضيافتها من كرم الأرض وخيرات الطبيعة، الأمر الذي ساعد علىى تنوع المأكولات وبالتالي القدرة على تقديم تجربة متميزة للزوار. كما يُشجع التنوع في المناظر الطبيعية المجتمعات المحلية والزوار على الانطلاق في رحلات سفاري ورحلات مشاهدة الطيور المهاجرة أثناء تنقلاتها الموسمية ومراقبة الأجناس المهدّدة بالانقراض في مواطنها الأصلية والبحث عن الأزهار النادرة في الأودية والتلال والاستمتاع بركوب الخيل أو السير في أرجاء المملكة.\r\n\r\nفي الأردن، ستتمكن من التنزه سيراً عبر الوديان والصعود عكس تيّارات الشلالات في الطبيعة وتسلق المنحدرات والجبال لبلوغ إطلالات خلاّبة وركوب الدراجة الهوائية عبر طرق مشى عليها ملوك وأباطرة التاريخ!', '1654255559.jpg'),
(5, 'Religion', 'السياحة الدينية', 'The land of modern day Jordan has been the site of significant events in the history of Christianity spanning across centuries throughout the New and Old Testaments. It is because of this religious signifcance that sites all around Jordan have been designated as pilgrimage sites and have been visited by Pope John Paul VI, Pope John Paul II, Pope Benedict XVI and Pope Francis within the past half century. As a land dedicated to religious coexistence, the country of Jordan maintains and protects these religious sites for the use of pilgrims from all around the world.', 'شهد الأردن على امتداد قرونٍ من الزمن - سواء في العهد القديم أو العهد الجديد من الكتاب المقدس- أحداثاً بارزة في تاريخ الديانة المسيحية. هذه الأهمية الدينية هي السبب وراء جعل عدة مواقع في أرجاء الأردن مقاصداً للحج، إذ زارها خلال الخمسين سنة الماضية عدد من البابوات، مثل البابا يوحنا بولس السادس والبابا يوحنا بولس الثاني والبابا بندكتوس السادس عشر والبابا فرانسيس. وبما أنّ الأردن دولة قائمة على التعايش الديني، فهي تسعى بجهودها للحفاظ على هذه المواقع الدينية وحمايتها وتقديمها للحجّاج من كافة بقاع العالم على أتم وجه.', '1654255227.jpg'),
(6, 'History', 'التاريخ', 'There is no mistaking the fact that Jordan is a Kingdom steeped in history and culture. \r\n\r\nFrom the moment you arrive, you get a sense of its rich heritage; all around are remnants of ancient civilizations long since passed, yet they still remain, stamped into the very fabric of this amazing Kingdom and etched into the soul of the people who live here.', 'تزخر المملكة الأردنية الهاشمية الضاربة في أعماق جذور التاريخ والثقافة بإرث غني ستستشعر به منذ لحظة وصولك. فأينما التفت سترى أنك محاطٌ بحضارات قديمة مضت، لا تزال آثارها القائمة شاهدة عليها، عدا عن قيم العراقة المتأصلة في نسيج هذه المملكة المثيرة للاهتمام وروح شعبها.', '1654255315.jpg'),
(7, 'Meaningful Trips', 'الرحلات الهادفة', 'By offering unique and hands-on cultural experiences for travelers, each of these social enterprises is satisfying the demand from travelers seeking authentic sustainable experiences that make a difference and their need to use the power of travel to help people and places thrive. If this is what you are looking for, you have come to the right place!', 'عبر منح الزوار تجربة عيش الثقافة الأردنية بشكل مباشر، تعمل المؤسسات المجتمعية المنخرطة في هذا المجال على تلبية طلب المسافر القاصد عيش تجربة أصيلة ومستدامة و تحدث فرقاً في حياة الآخر عبر تقديم المساعدة الهادفة إلى تنمية حياة الناس أو الأماكن على حد سواء. إن كان هذا ما تبحث عنه فقد أتيت إلى المكان الصحيح.', '1654255373.jpg'),
(8, 'Leisure & Wellness', 'الراحة والاستجمام', 'The popularity of the spa vacation has increased worldwide as many people are adopting healthier lifestyles. For this reason, Jordan has complimented its natural therapeutic sites with first class resorts offering a diverse range of amenities. The goal is to provide its visitors with a unique and relaxing experience catering to all of their health, fitness and beauty needs.', 'مع ازدياد اهتمام الناس بعيش أسلوب حياة مفعم بالصحة، زادت شعبية رحلات النقاهة والمنتجعات في كافة أرجاء العالم. لهذا السبب، عمل الأردن على تزويد مواقعه العلاجية الطبيعية بمنتجعات من الطراز الرفيع والتي توفّر مجموعة متنوعة من المرافق والخدمات، وذلك بغية منح الزوار تجربة راحة واسترخاء تلائم وتخدم متطلبات الصحة واللياقة والجمال.', '1654255795.jpg'),
(9, 'Conferences & Events', 'المؤتمرات والفعاليات', 'Breathtaking scenery, extraordinary venues and ultra-modern facilities create the ideal setting for both business and leisure in Jordan. As a major MICE destination in the MENA region, Jordan presents a strong proposition for meeting planners looking to leverage the country’s world-class business facilities, strategic location and abundance of natural attractions. A period of significant development has seen the birth of a new business landscape in Jordan, with modern meetings venues that feature the latest innovations in design and technology.', 'تشكّل المناظر الطبيعية الساحرة والقاعات المجهّزة على أعلى مستوى والمرافق العصرية المكان الأمثل سواء لإقامة فعاليات الشركات أو الاستجمام الشخصي. يعتبر الأردن وجهة أساسية في منطقة الشرق الأوسط لتنظيم وإقامة الاجتماعات والحوافز والمؤتمرات والمعارض (MICE)، إذ يحتل مكانة مهمة لدى مخطّطي الاجتماعات بفضل مرافق الاجتماعات والفعاليات عالمية المستوى موقعه الاستراتيجي ووفرة عوامل الجذب السياحي الطبيعية. شهد الأردن فترة من التنمية والتطور الملحوظين مع ولادة أعمالٍ تجارية جديدة، رافقتها قاعات اجتماعات معاصرة و مزوّدة بأحدث ابتكارات التصميم والتكنولوجيا.\r\n', '1654257346.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `image`, `cat_id`) VALUES
(1, 'Petra', 'البترا', 'The ancient city of Petra is one of Jordan’s national treasures and by far its best known tourist attraction. Petra is the legacy of the Nabataeans, an industrious Arab people who settled in southern Jordan more than 2,000 years ago. Admired then for its refined culture, massive architecture and ingenious complex of dams and water channels, Petra is a UNESCO World Heritages Site and one of the new Seven Wonders of the World. Inhabited by the Nabateans, Edomites and Romans, Petra brought together the knowledge and skill of these civilizations to create this world wonder. Caravans laden with incense, silks, spices and other exotic goods would rest at Petra.', 'مدينة البترا الضاربة في القِدم، هي واحدة من الكنوز الوطنية الأبرز في الأردن، و أشهر عامل جذب سياحي بلا منازع. بُنيت البترا عل يد الأنباط، ذلك الشعب العربي الكادح الذي استقر جنوبي الأردن قبل أكثر من ألفيّ عام. لا تزال البترا محط إعجاب العالم بأسره، فهي مُدرَجة على قائمة التراث العالمي الخاصة بمنظمة اليونسكو، كما أنها واحدة من عجائب الدنيا السبع الجديدة. اكتسب الموقع تميّزه منقطع النظير بفضل الثقافة التي احتواها، وعظمة العمارة الماثلة فيه، والعبقرية الهندسية في إنشاء نظام معقّد من السدود والقنوات المائية. كانت البترا مستقراً للأنباط والأدوميين والرومان، ما جعلها منارة للمعرفة ودليلاً شاهداً على براعة ساكنيها من الحضارات التي خلّفت بدورها هذه الأعجوبة العالمية. عُرفت البترا قديماً كمحطة لاستراحة القوافل المحملة بالبخور والحرير والتوابل وغيرها من البضائع الأجنبية.', '1654257140.png', 6),
(2, 'Amman', 'عمّان', 'Amman, the capital of Jordan, is a fascinating city of contrasts – a unique blend of old and new, situated on a hilly area between the desert and the fertile Jordan Valley. In the commercial heart of the city, ultra-modern buildings, hotels, smart restaurants, art galleries and boutiques rub shoulders comfortably with traditional coffee shops and tiny artisans\' workshops. Amman’s neighborhoods are diverse and range in cultural and historical context from hustle and bustle of the downtown markets to the art galleries of Jabal Lweibdeh and the modern shopping district of Abdali. ', 'تتميّز العاصمة الأردنية عمّان بالتناقضات المدهشة، فهي تجمع بين القديم والحديث وتقع على منطقة مرتفعة بعض الشيء بين الصحراء و وادي الأردن الخصب. يحتضن قلب المدينة التجاري المباني والفنادق المعاصرة والمطاعم المُبتكَرة والمعارض الفنية والبوتيكات إلى جانب المقاهي التقليدية والمشاغل الفنية الصغيرة. أحياء عمّان متنوعة وتتفاوت فيما بينها ثقافياً، بل و حتى تاريخياً، فهناك منطقة وسط البلد النشطة والنابضة بالحياة، ومنطقة جبل اللويبدة الغنية بالمعارض الفنية ومظاهر الحياة الثقافية، وهناك العبدلي منطقة التسوّق المعاصرة!', '1654257407.png', 9),
(3, 'Dead Sea', 'البحر الميت', 'A spectacular natural wonder the Dead Sea is perfect for religious tourism and fun in the sun with the family. With its mix of beach living and religious history you can soak up the sun while Biblical scholars can get their daily dose of religious history. The leading attraction at the Dead Sea is the warm, soothing, super salty water itself – some ten times saltier than sea water, and rich in chloride salts of magnesium, sodium, potassium, bromine and several others. The unusually warm, incredibly buoyant and mineral-rich waters have attracted visitors since ancient times, including King Herod the Great and the beautiful Egyptian Queen, Cleopatra. All of whom have luxuriated in the Dead Sea\'s rich, black, stimulating mud and floated effortlessly on their backs while soaking up the water\'s healthy minerals along with the gently diffused rays of the Jordanian sun.', 'البحر الميت أعجوبة طبيعية مذهلة، وهو مثالي للسياحة الدينية أو للترفيه برفقة العائلة تحت أشعة الشمس. تمزج تجربة البحر الميت بين متعة الحياة الشاطئية و تتبع التاريخ الديني. فهنا بإمكانك الاستمتاع بالشمس والسباحة، أما إن كنت من الباحثين في أمور الكتاب المقدس فهذا هو المكان الملائم للانغماس في التاريخ الديني للمنطقة. بدفئ مياه البحر الميت التي تبعث على الاسترخاء مع ملوحتها الشديدة - حوالى عشرة أضعاف نسب الملوحة الاعتيادية في مياه البحار- بالإضافة إلى ما تحتويه من أملاح معدنية، مثل المغنيسيوم والصوديوم والبوتاسيوم والبرومين وغيرها الكثير، يجعل منها عامل الجذب الأول والأساسي للمكان. جذبت هذه المياه الدافئة و الغنية بالأملاح المعدنية، والتي تتمتع بعامل طفو مرتفع، الزوار منذ العصور القديمة، بما في ذلك الملك هيرودس العظيم والملكة المصرية الجميلة كليوبترا. لطالما استمتعَ كافة الزوار بطين البحر الميت الأسود الغني القادر على تحفيز الجسم، وطفوا جميعاً على سطح البحر الميت باسترخاء تام، مستمتعين بالخصائص العلاجية لأملاح المياه المعدنية هذه تحت أشعة الشمس.', '1654257474.png', 8),
(4, 'Wadi Rum', 'وادي رم', '“The Valley of the Moon”, depicted as Mars in several Hollywood feature films Wadi Rum is an Arabian fairy-tale waiting to be discovered. Home to nomadic Bedouin tribes, Wadi Rum is a a quiet getaway of stars, sand, and sun; a perfect complement from Amman’s epicenter. Once inhabited by the Nabataeans of prehistoric times, Wadi Rum allows you to get lost in large landscapes and horizon lines. The calmness of the desert is sure calm your spirit and de-clutter your thoughts. Wadi Rum is waiting for you.  ', 'تستخدم هوليوود وادي رم \"وادي القمر\" لتصوير مشاهد مشابهة لكوكب المريخ. يأخذك الموقع- بحد ذاته- في أجواء خيالية أو حكاية عربية. إنها موطن للقبائل البدوية المترحلة، ومنطقة ذات سحر باهر تمنحك سَكينة كاملة بينما تتأمل رمالها ونجومها وشمسها، وتضعك في تجربة جديدة من نوع آخر مغاير لمتعة تجربتك في العاصمة عمّان. سكن الأنباط هذه المنطقة في الزمن الغابر، و ها هي الآن تمنحك فرصة الانغماس في مناظر طبيعية شاسعة على امتداد الأفق! استمتع بسَكينة الصحراء التي  تهدئ النفس والروح وتصفي الذهن. وادي رم بانتظارك لاكتشاف روعتها الآسرة!', '1654257543.png', 4),
(5, 'Aqaba', 'العقبة', 'Situated on the southern tip of Jordan, approximately 4 hours from the capital of Amman, Aqaba is a beach town with Jordanian appeal. Equipped with the local watering holes, to water sports, and a historical flair for those looking to revisit the past Aqaba is a delightful complement to the metropolitan appeal of Amman. ', 'تقع العقبة أقصى جنوب الأردن وتبعد حوالى 4 ساعات عن العاصمة عمّان، وهي مدينة ساحلية ذات طابع أردني. العقبة غنية بالفنادق المطلة على البحر، و الرياضات المائية المتوفّرة لمحبيها. إضافة إلى ذلك، تتمتع العقبة بعبقٍ تاريخي يشبع توق الشغوفين بالعودة إلى زمن خلا و استكشاف ماضي العقبة.', '1654257654.png', 4),
(6, 'Madaba', 'مادبا', 'Madaba is a combination of rural home life and a hot spot for religious tourism. Known as the “City of Mosaics” Madaba is the cultural epicenter for Byzantine and Umayyad mosaics. Just a short distance from the capitol visitors are just a stone\'s throw away from the holy monuments of religious iconography. ', '\r\nفي مادبا تجتمع ملامح الحياة الريفية مع مكوّنات السياحة الدينية لتشكلا مزيجاً يثير اهتمام الزائر. تُعرف مادبا باسم \"مدينة الفسيفساء\"، لكونها ثرية باللوحات الفسيفسائية البيزنطية والأموية، و تلك التي لا تزال تنتج محلياً إلى اليوم. يتيح لك موقعها الملائم المجال لإدراجها ضمن برنامج زيارتك للأردن، فهي ليست ببعيدة عن العاصمة عمّان، كما أنها قريبة على أهم المواقع الجغرافية الدينية البارزة.', '1654257727.png', 5),
(8, 'Ajlun', 'عجلون', '	The marvels of nature and the genius of medieval Arab military architecture have given northern Jordan two of the most important ecological and historical attractions in the Middle East: the sprawling pine forests of the\r\nAjlun-Dibbine area, and the towering Ayyubid castle at Ajlun, which helped to defeat the Crusaders eight centuries ago. Locals often take advantage of the green landscapes of Ajlun to take a break from city life and connect with\r\nnature.	', 'هنا حيث تجتمع عجائب الطبيعة مع عبقرية الهندسة المعمارية العسكرية لدى عرب العصور الوسطى، يتجلّى الجمال كله بفضل هذا المزيج الرائع. يحظى شمال الأردن باثنين من أهم المعالم البيئية والتاريخية في الشرق الأوسط: منطقة دبّين الغنية بأشجار الصنوبر الممتدة، وقلعة عجلون\r\nالشامخة على مرتفع، لتشهد على أحداث تاريخية منذ أن شيّدها الأيوبيون و دورها في مساعدتهم على هزم الصليبيين قبل ثمانية قرون مضت. عجلون منطقة محبّبة للأردنيين، إذ تمنحهم فرصة الاستمتاع بجمال الطبيعة الخضراء بعيداً عن صخب الحياة في المدينة، وكذلك التأمل والاندماج مع\r\nالطبيعة.', '1654258607.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `image`, `city_id`) VALUES
(1, 'al-siq to treasury trail (main trail)', '(مسار السيق وصولاً إلى الخزنة (المسار الرئيسي', 'This trail is the most visited trail in Petra, the trail starts from the visitor center of Petra through The Siq to The Treasury. While most tourists think that the trail ends at the ancient city’s main attraction, The Treasury, the main trail continues past the Siq, Royal Tombs, Colonnaded Street and ends by Qasr Al-Bint (The Girl’s Palace).   \r\nDuration: This depends on the pace of the tourist but can take up to an hour from the visitors’ center to the Treasury.\r\n\r\nLevel: Easy ', 'إنّه المسار الأكثر شعبية في البترا، ويبدأ من مركز الزوار في البترا وصولاً إلى السيق ومن ثم الخزنة. بينما يظن معظم السياح أن المسار ينتهي لدى بلوغ الخزنة، والتي تعتبر عامل الجذب الأهم لهذه المدينة، إلاّ أنّه في الحقيقة يستمر بعد السيق، ليشمل المقابر الملكية وشارع الأعمدة وينتهي عند قصر البنت.\r\n\r\nالمدة الزمنية: يعتمد على وتيرة سير السائح، ولكن إجمالاً قد يستغرق حوالي ساعة من مركز الزوار إلى الخزنة\r\n\r\n\r\nالمستوى: سهل \r\n\r\n', '1654259611.png', 1),
(2, 'hot air balloon', 'المنطاد', 'Be awe-struck at the beauty of Wadi Rum from 2,000ft above the the earth’s surface. Located in the Disi area of Wadi Rum, accompanied by our representatives you can take a journey off the beaten path as you get a breathtaking aerial view of “The Valley of the Moon”.\r\n\r\n', 'انبهر بجَمال وادي رم من ارتفاع 2000 قدم فوق سطح الأرض. تبدأ الرحلة في منطقة الديسي في وادي رم ويرافقك فيها مندوبونا ليأخذوك في رحلة فوق طرقٍ لا يسلكها البشر بينما تنعم بمنظر أخّاذ لوادي القمر وأنت في السماء.\r\n\r\n', '1654259744.png', 4),
(3, 'aqaba aquarium', 'معرض الأحياء البحرية (الأكواريوم)', 'The city of Aqaba is overflowing with aquatic life. Take a journey of discovery through Aqaba’s Aquarium to reveal the hidden treasures of the Red Sea.\r\n\r\nAs part of the Marine Science Station Complex, the Aquarium offers a chance to dive without getting wet and watch the aquatic life inside the Red Sea!\r\n\r\n\r\n\r\nContact information/ how to book:\r\nTelephone: 00962 3 5144', 'تغتني مدينة العقبة بكافة أشكال الحياة المائية. استكشف الكنوز الخفية في البحر الأحمر من خلال زيارتك لمعرض الأحياء البحرية.\r\n\r\nالمعرض المائي هو جزء من محطة العلوم البحرية، ويقدم لزائره فرصة معاينة أشكال الحياة البحرية في البحر الأحمر دون الحاجة إلى الغوص في الماء.\r\n\r\n\r\n\r\nللتواصل والحجز:\r\nهاتف: 0096203201514', '1654259853.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'jordan'),
(2, 'United State');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `stars` tinyint(5) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `image`, `stars`, `city_id`) VALUES
(10, 'Al Manara Luxury Collection Hotel	', 'فندق المنارة لكشري كوليكشن	', 'ddddd', 'ddddddd', '1654273080.jpg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `city_id`) VALUES
(9, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `res_airline`
--

CREATE TABLE `res_airline` (
  `id` int(11) NOT NULL,
  `type` tinyint(3) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date DEFAULT NULL,
  `price` float NOT NULL,
  `country_res_id` int(11) NOT NULL,
  `airline_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_airline`
--

INSERT INTO `res_airline` (`id`, `type`, `date_in`, `date_out`, `price`, `country_res_id`, `airline_id`) VALUES
(2, 1, '2022-06-10', '0000-00-00', 50, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `res_h`
--

CREATE TABLE `res_h` (
  `id` int(11) NOT NULL,
  `type` tinyint(3) NOT NULL,
  `range_room` int(11) NOT NULL,
  `price` float NOT NULL,
  `nights` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_h`
--

INSERT INTO `res_h` (`id`, `type`, `range_room`, `price`, `nights`, `date_in`, `hotel_id`, `status`) VALUES
(1, 0, 2, 400, 3, '2022-06-11', 10, 0),
(4, 1, 4, 10, 3, '2022-06-10', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `res_tickets`
--

CREATE TABLE `res_tickets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_route` tinyint(11) NOT NULL DEFAULT 0,
  `ticket_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `res_user`
--

CREATE TABLE `res_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `h_id` int(11) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `price` float NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `price`, `city_id`) VALUES
(2, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country_id` int(10) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `country_id`, `is_admin`) VALUES
(1, 'admin', 'admin@admin.com', '601f1889667efaebb33b8c12572835da3f027f78', 1, 1),
(11, 'osama', 'osama@gmail.com', '123123', 1, 0),
(12, 'khaled', 'khaled@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 1, 0),
(15, 'sara', 'sara@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_airline`
--
ALTER TABLE `res_airline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `airline_id` (`airline_id`),
  ADD KEY `country_id` (`country_res_id`);

--
-- Indexes for table `res_h`
--
ALTER TABLE `res_h`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `res_tickets`
--
ALTER TABLE `res_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `res_user`
--
ALTER TABLE `res_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `res_airline`
--
ALTER TABLE `res_airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `res_h`
--
ALTER TABLE `res_h`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `res_tickets`
--
ALTER TABLE `res_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `res_user`
--
ALTER TABLE `res_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airlines`
--
ALTER TABLE `airlines`
  ADD CONSTRAINT `airlines_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `maps_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `res_airline`
--
ALTER TABLE `res_airline`
  ADD CONSTRAINT `res_airline_ibfk_1` FOREIGN KEY (`airline_id`) REFERENCES `airlines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_airline_ibfk_2` FOREIGN KEY (`country_res_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `res_h`
--
ALTER TABLE `res_h`
  ADD CONSTRAINT `res_h_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `res_tickets`
--
ALTER TABLE `res_tickets`
  ADD CONSTRAINT `res_tickets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_tickets_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `res_user`
--
ALTER TABLE `res_user`
  ADD CONSTRAINT `res_user_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `airlines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_user_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_user_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
