markdown-> toHTML( $ value)); } public function conversionsProvider() { return [ [“ test”, “< p > test </ p >\ n”], [“# title”, “< h1 > title </ h1 >\ n”], [“ Here’s Johnny!”, “< p > Here&# 8217; s Johnny! </ p >\ n”], ]; } }?>