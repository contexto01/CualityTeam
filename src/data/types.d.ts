export interface Game {
  title: string
  description: string
  descriptionPage: string
  image: string
  screenshots: string[]
  features: string[]
  trailer: string
  link: string
  buyGame: {
    title: string
    description: string
    buttonDescription: string
    linkGame: string
  }[]
}

export interface Games {
  [key: string]: Game
}
