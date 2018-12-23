def getUidbyPid(pid, role):
    return pid & ~( 0xFFFF << 48 ) | ( role << 48 )


s = int(raw_input())

print(getUidbyPid(s,3))
