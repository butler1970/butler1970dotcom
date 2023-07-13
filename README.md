# Setup

- Clone this repository into <PROJECT_ROOT>.
- In the <PROJECT_ROOT> directory execute the following command to populate the vendor directory.

```
docker run --rm --interactive --tty -v $(pwd):/app composer install
```

- Clone config repository to get .env file and copy into <PROJECT_ROOT>.
- From <PROJECT_ROOT> execute the following command to stand up project.

```
./vendor/bin/sail up
```

- Browse to http://localhost
