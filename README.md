# polyhybrid-crossing
This function lets you to calculate all the possible combinations of gametes with your desired heterozygosity number.

##Usage
You can simply call the function by giving an integer argument, heterozygosity number. 
Please note that the function returns an array.

```PHP
calculatePossibleGametes(int);
```

Function uses the English alphabet from A to Z automaticly. If you want to shuffle the characters, just give "true" value as the function's second argument.
```PHP
calculatePossibleGametes(int, true);
```
