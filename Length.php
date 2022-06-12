<?php
/** Yep It Readline */
function readline($prompt = ""):string{if($prompt){if(is_array($prompt)){var_dump($prompt);}else {echo $prompt."";}}$fp = fopen("php://stdin","r");$line = rtrim(fgets($fp, 1024));if(empty($line)){return '';}return $line;}
# --- Input!! --- #
NameBack:
$name = readline("Enter You Name > ");
if ($name === "") {                                        # If name = "" #
    echo("look like you name is space only Hmmm\n");       # Error Text #
    goto NameBack;
}
# --- Time For Password --- #
PasswordBack:
$Input = readline("Enter You Password > ");
$pl = strlen($Input); # PL = Password Length #
AskAgin:
echo("Hey $name, You Password Length is $pl\n");
echo(" 1) NO\n");
echo(" 2) Yes\n");      # Recomment echo(" 1) NO\n 2) Yes\n"); But it look like hard read (IDK) #
$Input2 = readline("Enter Here > ");
switch ($Input2){
    case 1:
        echo("OK $name, I will send you to Password (Line 15)\n");
        goto PasswordBack;
    break;
    case 2:
        $Password = base64_encode($Input);
        echo("OKAY: $name, Password: $Password /n--- Goodbye!! ---\n");
        break;
    default;
        echo("I don't Know What it means try agin..\n");
        goto AskAgin;
    break;
}
# Don't Forget to '\n' when echo done!! | ex "echo("Hello World");" > "echo("Hello World\n");" #
?>