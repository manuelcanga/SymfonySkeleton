# MyAPP

## Description

This app...

## Installation

Firstly, clone the repository

```terminal
git clone https://github.com/manuelcanga/SymfonySkeleton.git my_app
```

Secondly, add execution perm to `bin/`files:

```terminal
/$ cd my_app
/my_app$ chmod u+x bin/*
```

## Execution

In first place, up dockers:

```terminal
/my_app$ docker-compose up -d
```

In second place, up your app:

```terminal
/my_app$ bin/my_app start
```

Finally, open in your browser the address: [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

## Tests

Unit tests can be launched with:

```terminal
/my_app$ bin/my_app tests
```
