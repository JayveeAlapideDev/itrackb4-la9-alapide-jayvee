QUESTION
Q1. Because the index is already included on a route resource which is inside of the Controller
Q2.The url on year 4 only, no course filter is look like query, but the result is the same on the  filter route
Q3.The detail page needed no change. Highlighting nav based on the current route  checking if the active route name is products.show still works exactly as before, because navigating to a detail page is a genuinely different route (/products/{brand}) the active-link check was already comparing against route names or path prefixes, and that comparison is untouched by query strings.
Q4.