<?php if(c("edit1")->text == ""){
   MessageBox("Не введено имя!", "Ошибка");
}
else
c("dialog1")->execute();
$name = c("edit1")->text;
$version = c("combobox1")->inText;
switch ( c("dialog1")->result)
{
    case 0:
    {
        MessageBox("Username: $name , Version: $version.", "LOG");
        app::close();
        break;
    }
}
