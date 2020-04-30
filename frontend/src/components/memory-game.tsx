import React from "react";
import { makeStyles } from '@material-ui/core/styles';
import MemoryHeader from "./header";
import MemoryToolbar from "./toolbar";

class MemoryGame extends React.Component {


    render() {
        return (
        <>
            <MemoryHeader/>
            <MemoryToolbar />
        </>
        )
    }
}

export default MemoryGame;
