export interface Game {
  title: string
  description: string
  descriptionPage: string
  image: string
  screenshots: string[]
  features: string[]
  trailer: string
  link: string
}

export interface Games {
  [key: string]: Game
}
