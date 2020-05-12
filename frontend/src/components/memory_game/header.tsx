import React from "react";
import { makeStyles } from '@material-ui/core/styles';

const useStyles = makeStyles({
    root: {
        fontFamily: "\"Roboto\", \"Helvetica\", \"Arial\", sans-serif",
        textTransform: "uppercase"
    }
});

const MemoryHeader = () => {
    const classes = useStyles();
    return <h1 className={classes.root}> Memória játék </h1>
}

export default MemoryHeader;