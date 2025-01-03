# PHP Loose Comparison Bug

This repository demonstrates a common issue in PHP: unexpected behavior resulting from loose comparison (`==`) of different data types.  The `bug.php` file contains the erroneous code, while `bugSolution.php` offers a corrected version.

Loose comparison can lead to subtle bugs that are difficult to trace. This example highlights the importance of using strict comparison (`===`) whenever type safety is critical.