<?php c("label5")->caption += 1;
$self->interval == rand(200,1300);
if(c("label5")->caption == 34){
  c("label4")->visible = false;
  c("edit1")->visible = true;
  c("label2")->visible = true;
  c("combobox1")->visible = true;
  c("label3")->visible = true;
  c("label5")->visible = false;
  c("AnButton1")->toFront();
}
