Firstly, I am really happy that you are thinking about contributing to this project.

Please note that this project is released with a [Contributor Code of Conduct](CODE_OF_CONDUCT.md). By participating in this project you agree to abide by its terms.

## Issues: Bugs and Features

I'd love you to tell me about bugs and request features through an issue. You can find a tab to these 
at the top of this screen.

At the current time, this project doesn't use a template for these, so feel free to write as little or
as much as you need - we will be in contact to clarify details if needed.

## Contributing Code

Please make sure you understand the [License](LICENSE.md) before contributing code.

All contributions are welcome. Feel free to fork this repository and then send a pull request back
with your contribution. If you need help raising a pull request, feel free to reach out to me in an issue.

### Setting up your environment

Once you have forked the repository and cloned it to your local machine, make sure you run composer:

```
composer install
```

(if you do not have composer installed, visit [GetComposer](https://getcomposer.org/)).

You can run the various test suites using composer:

- Unit Tests: `composer test`
- Static Analysis: `composer analyse`
- Code Sniffer: `composer sniff`

The final one will ensure that your code meets the style guide for this project. You may also be able
to fix style issues automatically using `composer fix`. This will not fix all style issues, unfortunately!