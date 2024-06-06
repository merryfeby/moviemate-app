<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    //pushed branch tino to main, but no record in history??
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('movie')->insert([
        //     ['id' => 1, 'title' => 'Elemental', 'duration' => 120, 'cast' => 'Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr', 'producer' => 'Pixar', 'director' => 'John Lasseter and Pete Docter', 'poster' => 'https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg', 'genre' => 'Kids', 'status' => 1, 'synopsis' => '\"Elemental\" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water ny', 'license' => 1, 'licensed_at' => '2024-05-25 19:21:31'],
        //     ['id' => 2, 'title' => 'How to Make Millions Before Grandma Dies', 'duration' => 126, 'cast' => 'Putthipong Assaratanakul, Tontawan Tantivejakul, Usha Seamkhum, Sarinrat Thomas, Sanya Kunakorn, Pongsatorn Jongwilas, Himawari Tajiri', 'producer' => 'Jira Maligool', 'director' => 'Pat Boonnitipat', 'poster' => 'https://asset.tix.id/wp-content/uploads/2024/05/0ae91767-957f-476b-a433-028aba02e6f2.webp', 'genre' => 'Drama', 'status' => 1, 'synopsis' => 'A man quits work to care for dying grandmother, motivated by her fortune. He schemes to win her favor before she passes.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
        // ]);
        DB::table('movie')->insert([
            ['id' => 1, 'title' => 'Elemental', 'duration' => 120, 'cast' => 'Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr', 'producer' => 'Pixar', 'director' => 'John Lasseter and Pete Docter', 'poster' => 'https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg', 'genre' => 'Kids', 'status' => 1, 'synopsis' => '\"Elemental\" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water ny', 'license' => 0, 'licensed_at' => null],
            ['id' => 2, 'title' => 'How to Make Millions Before Grandma Dies', 'duration' => 126, 'cast' => 'Putthipong Assaratanakul, Tontawan Tantivejakul, Usha Seamkhum, Sarinrat Thomas, Sanya Kunakorn, Pongsatorn Jongwilas, Himawari Tajiri', 'producer' => 'Jira Maligool', 'director' => 'Pat Boonnitipat', 'poster' => 'https://asset.tix.id/wp-content/uploads/2024/05/0ae91767-957f-476b-a433-028aba02e6f2.webp', 'genre' => 'Drama', 'status' => 1, 'synopsis' => 'A man quits work to care for dying grandmother, motivated by her fortune. He schemes to win her favor before she passes.', 'license' => 0, 'licensed_at' => null],
            ['id' => 3, 'title' => 'My Neighbor Totoro', 'duration' => 86, 'cast' => 'Noriko Hidaka, Chika Sakamoto', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/I/81Xqgmj-4TL._AC_UF894,1000_QL80_.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'Two young girls, Satsuki and Mei, move with their father to a house in the country and discover the friendly forest spirits living nearby.', 'license' => 0, 'licensed_at' => null],
            ['id' => 4, 'title' => 'Spirited Away', 'duration' => 125, 'cast' => 'Rumi Hiiragi, Miyu Irino', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/I/61ON14PVzoL._AC_UF894,1000_QL80_.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'During her family\'s move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches, and spirits, where humans are changed into beasts.', 'license' => 0, 'licensed_at' => null],
            ['id' => 5, 'title' => 'Princess Mononoke', 'duration' => 134, 'cast' => 'Yōji Matsuda, Yuriko Ishida', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/I/61DqI7zRBpL._AC_UF894,1000_QL80_.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'On a journey to find the cure for a Tatarigami\'s curse, Ashitaka finds himself in the middle of a war between the forest gods and Tatara, a mining colony.', 'license' => 0, 'licensed_at' => null],
            ['id' => 6, 'title' => 'Howl\'s Moving Castle', 'duration' => 119, 'cast' => 'Chieko Baisho, Takuya Kimura', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://i.pinimg.com/originals/d4/aa/58/d4aa58171570d9650dce2c68161fcd45.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'When an unconfident young woman is cursed with an old body by a spiteful witch, her only chance of breaking the spell lies with a self-indulgent yet insecure young wizard and his companions in his legged, walking castle.', 'license' => 0, 'licensed_at' => null],
            ['id' => 7, 'title' => 'Kiki\'s Delivery Service', 'duration' => 103, 'cast' => 'Minami Takayama, Rei Sakuma', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/I/51yPFJAL9iL._AC_UF894,1000_QL80_.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'A young witch, on her mandatory year of independent life, finds fitting into a new community difficult while she supports herself by running an air courier service.', 'license' => 0, 'licensed_at' => null],
            ['id' => 8, 'title' => 'Castle in the Sky', 'duration' => 124, 'cast' => 'Mayumi Tanaka, Keiko Yokozawa', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/I/51p8ozSTNUL.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'A young boy and a girl with a magic crystal must race against pirates and foreign agents in a search for a legendary floating castle.', 'license' => 0, 'licensed_at' => null],
            ['id' => 9, 'title' => 'The Wind Rises', 'duration' => 126, 'cast' => 'Hideaki Anno, Miori Takimoto', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/M/MV5BMTU4NDg0MzkzNV5BMl5BanBnXkFtZTgwODA3Mzc1MDE@._V1_.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'A look at the life of Jiro Horikoshi, the man who designed Japanese fighter planes during World War II.', 'license' => 0, 'licensed_at' => null],
            ['id' => 10, 'title' => 'Ponyo', 'duration' => 101, 'cast' => 'Tomoko Yamaguchi, Kazushige Nagashima', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://m.media-amazon.com/images/I/617RGwECAmL._AC_UF1000,1000_QL80_.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'A five-year-old boy develops a relationship with Ponyo, a young goldfish princess who longs to become a human after falling in love with him.', 'license' => 0, 'licensed_at' => null],
            ['id' => 11, 'title' => 'The Tale of the Princess Kaguya', 'duration' => 137, 'cast' => 'Aki Asakura, Kengo Kora', 'producer' => 'Studio Ghibli', 'director' => 'Isao Takahata', 'poster' => 'https://m.media-amazon.com/images/I/51o6mPMDyYL.jpg', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'Found inside a shining stalk of bamboo by an old bamboo cutter and his wife, a tiny girl grows rapidly into an exquisite young lady. The mysterious young princess enthralls all who encounter her, but ultimately, she must confront her fate and the punishment for her crime.', 'license' => 0, 'licensed_at' => null],
            ['id' => 12, 'title' => 'Nausicaä of the Valley of the Wind', 'duration' => 117, 'cast' => 'Sumi Shimamoto, Mahito Tsujimura', 'producer' => 'Studio Ghibli', 'director' => 'Hayao Miyazaki', 'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRomZclUB9pZ2omlR-hgkSaPjoH1cNJ-Rf_Ig&s', 'genre' => 'Animation', 'status' => 1, 'synopsis' => 'Warrior and pacifist Princess Nausicaä desperately struggles to prevent two warring nations from destroying themselves and their dying planet.', 'license' => 0, 'licensed_at' => null]
        ]);
        
        
    }
}
