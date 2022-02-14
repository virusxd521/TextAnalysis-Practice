<?php
    
    require_once "./Text.php";

    $text = new Text('Once, Aunt Petunia, tired of Harry coming back from the barbers looking as though he hadn’t been
at all, had taken a pair of kitchen scissors and cut his hair so short he was almost bald except for his
bangs, which she left “to hide that horrible scar” Dudley had laughed himself silly at Harry, who
spent a sleepless night imagining school the next day, where he was already laughed at for his baggy
clothes and taped glasses. Next morning, however, he had gotten up to find his hair exactly as it had
been before Aunt Petunia had sheared it off. He had been given a week in his cupboard for this, even
though he had tried to explain that he couldn’t explain how it had grown back so quickly.
Another time, Aunt Petunia had been trying to force him into a revolting old sweater of Dudley’s
(brown with orange puff balls). The harder she tried to pull it over his head, the smaller it seemed to
become, until finally it might have fitted a hand puppet, but certainly wouldn’t fit Harry. Aunt Petunia
had decided it must have shrunk in the wash and, to his great relief, Harry wasn’t punished.
On the other hand, he’d gotten into terrible trouble for being found on the roof of the school
kitchens. Dudley’s gang had been chasing him as usual when, as much to Harry’s surprise as anyone
else’s, there he was sitting on the chimney. The Dursleys had received a very angry letter from
Harry’s headmistress telling them Harry had been climbing school buildings. But all he’d tried to do
(as he shouted at Uncle Vernon through the locked door of his cupboard) was jump behind the big
trash cans outside the kitchen doors. Harry supposed that the wind must have caught him in mid-jump.
But today, nothing was going to go wrong. It was even worth being with Dudley and Piers to be
spending the day somewhere that wasn’t school, his cupboard, or Mrs. Figg’s cabbage-smelling
living room.');


    // Done
    $length = $text->getLength();
    $nr_of_words = $text->getNrOfWords();

    // To do
    $nr_of_sentences = $text->getNrOfSentences();
    $nr_of_paragraphs = $text->getNrOfParagraphs();
