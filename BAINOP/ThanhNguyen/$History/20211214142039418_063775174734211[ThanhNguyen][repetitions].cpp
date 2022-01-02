#include<bits/stdc++.h>

using namespace std;
string s ;
int num , res;
int main()
{
    if (fopen("repetitions.inp" , "r"))
    {
        freopen("repetitions.inp" , "r" , stdin);
        freopen("repetitions.out" , "w" , stdout);
    }
    cin>>s;
    num=1;
    res=1;
    for(int i=1 ; i<s.size() ; i++)
        if (s[i]!=s[i-1]) res=max(res , num) , num=1;
            else num++;
    cout<<res;
}
