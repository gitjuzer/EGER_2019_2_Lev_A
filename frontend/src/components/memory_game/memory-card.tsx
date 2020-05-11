import React from 'react';
import {makeStyles} from '@material-ui/core/styles';
import Card from '@material-ui/core/Card';

const useStyles = makeStyles({
    root: {
        width: 150,
        height: 150,
        backgroundColor: 'purple',
        margin: 10,
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center'
    },
    flipContainer: {
        perspective: 1000,
        display: "inline-block",
        border: '1px solid white',
        backgroundColor: 'linear-gradient(45deg, #FE6B8B 30%, #FF8E53 90%)'
    },

});

export interface ICardProps {
    value: string,
    onClick: Function
}


const MemoryCard = (props: ICardProps) => {
    const {value, onClick} = props;
    const classes = useStyles();
    const [flipped, setFlipped] = React.useState(false);

    const handleClick = (event: any) => {
        onClick(!flipped, value)
        setFlipped(!flipped);
    }
    return (
        <Card className={classes.root} variant='outlined' onClick={handleClick}>
            {
                flipped && <p>{value}</p>
            }
        </Card>
    );

}

export default MemoryCard;
