In the last step we made all the letters lower case. We now want to capitalise words at the
beginning of sentences. This presents a slightly trickier problem. In the last step we could
indiscriminately change each letter to lower case. But now we need to identify words and single out
those that begin a sentence.

In this step, let's turn the snippet into an array where each item in the array contains a single word.
Punctuation can be left where it is. The `cleanup` function will now return an array instead of a string.

Hint: try the `explode` function.