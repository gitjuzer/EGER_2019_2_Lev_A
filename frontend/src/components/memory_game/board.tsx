import React from "react";
import {makeStyles} from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import MemoryCard from "./memory-card";

const useStyles = makeStyles({
    root: {
        padding: 50,
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        flexWrap: "wrap"
    }
});
const mockData12: string[] = [
    'placeholder1',
    'placeholder2',
    'placeholder3',
    'placeholder4',
    'placeholder5',
    'placeholder6',
    'placeholder1',
    'placeholder2',
    'placeholder3',
    'placeholder4',
    'placeholder5',
    'placeholder6',
];

const mockData20: string[] = [
    'placeholder1',
    'placeholder2',
    'placeholder3',
    'placeholder4',
    'placeholder5',
    'placeholder6',
    'placeholder7',
    'placeholder8',
    'placeholder9',
    'placeholder0',
    'placeholder1',
    'placeholder2',
    'placeholder3',
    'placeholder4',
    'placeholder5',
    'placeholder6',
    'placeholder7',
    'placeholder8',
    'placeholder9',
    'placeholder0',
];
export interface IBoardProps {
    numberOfCards: number
}
const Board = (props: any) => {
    const {numberOfCards} = props;
    const classes = useStyles();
    let flippedCards:string[] = [];
    const onClick = (flipped: boolean, value: string) => {
        if (flipped && flippedCards.length < 2) {
            flippedCards= [...flippedCards, value]
        } else {
            flippedCards= flippedCards.filter(item => item !== value )
        }
        console.log(flippedCards)
    }

    return <>
        <Paper className={classes.root}>
            {
                mockData20.map(item => {
                    return (
                        <MemoryCard value={item} onClick={onClick}/>
                    );
                })
            }
        </Paper>
    </>
}

export default Board;