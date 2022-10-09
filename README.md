# PokAIdex

A #hacktoberfest 2022 project to create a Pokedex inspired website that incorporates various AI elements and integrations such as OpenAI's GPT-3.

The key functions of the Pokedex

- Accept written or verbal commands to describe a certain pokemon
- Respond with verbal information about that Pokemon
    - It would be nice here if you were able to continue a single conversation about a particular pokemon, for example:
        - Human: "What is a Pikachu"
        - AI: "Pikachu is an electric mouse type Pokemon"
        - Human: "How does it evolve"
        - AI: By using a Thunderstone, though in this particular episode something something...
- Display an image of the pokemon, with it's shiny variant
- Produce the sound ("cry") of the pokemon
- Maybe be able to tell you which regions you can find it, even better if it can tell you the sub-regions.

Ideal additional functionality:
- Be able to answer very specific questions i.e.
    - "In Pokemon Fire Red, where can I find a Sandshrew."

For much of this Pokemon related information we can integrate with https://pokeapi.co/. They advise us to cache resources where possible, so we should aim to do this with each Pokemon look-up.

Suggested stack:

Laravel with Inertia.JS and React
MySQL Database
