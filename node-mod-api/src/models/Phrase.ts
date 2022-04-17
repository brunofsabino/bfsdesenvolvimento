import { Model, DataTypes } from 'sequelize'
import { sequelize } from '../instances/pg'

export interface PhraseInstance extends Model {
    id: number,
    author: string,
    content: string
}

export const Phrase = sequelize.define<PhraseInstance>('Phrase', {
    id: {
        primaryKey: true,
        type: DataTypes.INTEGER,
        autoIncrement: true
    },
    author: {
        type: DataTypes.STRING
    },
    content: {
        type: DataTypes.STRING
    }
}, {
    tableName: 'phrases',
    timestamps: false
})