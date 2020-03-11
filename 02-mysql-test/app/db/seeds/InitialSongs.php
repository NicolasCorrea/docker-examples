<?php

use Phinx\Seed\AbstractSeed;

class InitialSongs extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            ["artist" => 'Rin', "track" => 'Ljubav/Beichtstuhl', "link" => 'https://www.youtube.com/watch?v=MDHJMirQ5PI'],
            ["artist" => 'Jeremih feat. Natasha Mosley', "track" => 'F*** U All The Time', "link" => 'https://www.youtube.com/watch?v=6-Bq7PCKCJ4'],
            ["artist" => 'Nao', "track" => 'In the Morning', "link" => 'https://www.youtube.com/watch?v=uuocmqLRgOM'],
            ["artist" => 'Sofi / Tukker', "track" => 'Matadora', "link" => 'https://www.youtube.com/watch?v=d6GJeap4Oqo'],
            ["artist" => 'Yung Hurn', "track" => 'Nein', "link" => 'https://www.youtube.com/watch?v=22m5eU6uxeQ'],
            ["artist" => 'Rin', "track" => 'Error', "link" => 'https://www.youtube.com/watch?v=VzajBMa-2P8'],
            ["artist" => 'Detachments', "track" => 'Circles (Martyn Remix)', "link" => 'http://www.youtube.com/watch?v=UzS7Gvn7jJ0'],
            ["artist" => 'Survive', "track" => 'Hourglass', "link" => 'https://www.youtube.com/watch?v=JVOe2oGoHLk'],
            ["artist" => 'Big Narstie', "track" => 'Hello Hi', "link" => 'https://www.youtube.com/watch?v=q10WwZJmPew'],
            ["artist" => 'Sleaford Mods', "track" => 'Tarantula Deadly Cargo', "link" => 'https://www.youtube.com/watch?v=E-gvxxhcS8s'],
            ["artist" => 'Mykki Blanco & Woodkid', "track" => 'Highschool never ends', "link" => 'https://www.youtube.com/watch?v=cNGR4ciDmTA'],
            ["artist" => 'Secondcity & Tyler Rowe', "track" => 'I Enter', "link" => 'https://www.youtube.com/watch?v=vAmDJAxNMi0'],
            ["artist" => 'Maxxi Soundsystem', "track" => 'Regrets we have no use for (Radio1 Rip)', "link" => 'https://soundcloud.com/maxxisoundsystem/maxxi-soundsystem-ft-name-one'],
            ["artist" => 'Jamie T', "track" => 'Don`t you find', "link" => 'https://www.youtube.com/watch?v=-tmoaFAT108'],
            ["artist" => 'Sierra Kid', "track" => 'Ein Fan von Dir', "link" => 'https://www.youtube.com/watch?v=dfabdmbpQeQ'],
            ["artist" => 'SSIO', "track" => 'Nullkommaneun', "link" => 'https://www.youtube.com/watch?v=Slei8n08Cqk'],
            ["artist" => 'Pupkulies & Rebecca', "track" => 'ICI', "link" => 'https://www.youtube.com/watch?v=60tebPRj_D0'],
            ["artist" => 'Color War', "track" => 'Shapeshifting', "link" => 'https://vimeo.com/111250184'],
            ["artist" => 'RÜFÜS', "track" => 'Innerbloom', "link" => 'https://www.youtube.com/watch?v=IA1liCmUsAM'],
            ["artist" => 'RÜFÜS', "track" => 'Tonight', "link" => 'https://www.youtube.com/watch?v=GCa_TKn9ghI'],
        ];
        $songs = $this->table("songs");
        $songs->insert($data)->save();
    }
}
